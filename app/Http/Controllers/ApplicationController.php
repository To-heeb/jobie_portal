<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Console\Application;
use Illuminate\Support\Facades\Auth;
use App\Models\Application as JobApplication;
use App\Models\CoverLetter;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $applicationInfo = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone_number' =>  'required',
            'email' =>  'required',
            'place' =>  'required',
            'job_id' =>  'required|integer',
            'resume' => 'required|mimes:pdf|max:2048',
            'cover_letter'  => 'nullable|mimes:pdf|max:2048',

            'custom_response'   => 'nullable|array',
            // validate custom field here
            "custom_response.*"  => "required_unless:custom_response,null|string|exclude_if:custom_response,null",
        ]);


        if ($request->hasFile('resume')) {
            $applicationInfo['resume'] = $request->file('resume')->store('resumes', 'public');

            $resume["user_id"] = Auth::user()->id;
            $resume["name"] = $applicationInfo['resume'];
            $resume["size"] = $request->file('resume')->getSize();
            $resume['type'] = $request->file('resume')->getMimeType();

            // submit to model
            $applicationInfo['resume_id'] = Resume::create($resume)->id;
        }

        if ($request->hasFile('cover_letter')) {
            $applicationInfo['cover_letter'] = $request->file('cover_letter')->store('cover_letters', 'public');

            $cover_letter["user_id"] = Auth::user()->id;
            $cover_letter["name"] = $applicationInfo['cover_letter'];
            $cover_letter["size"] = $request->file('cover_letter')->getSize();
            $cover_letter["type"] = $request->file('cover_letter')->getMimeType();

            // submit to model
            $applicationInfo['cover_letter_id'] = CoverLetter::create($cover_letter)->id;
        }

        $applicationInfo['user_id'] = Auth::user()->id;
        $applicationInfo['custom_response'] = (!empty($applicationInfo['custom_response'])) ? json_encode($applicationInfo['custom_response']) : "";

        $application = JobApplication::create($applicationInfo);

        return redirect('/user/search-job')->with('success', 'Job Application Successful');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
