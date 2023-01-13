<?php

namespace App\Http\Controllers;

use Illuminate\Console\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Application as JobApplication;

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
        //
        dd($request);
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

            $user_id = Auth::user()->id;
            $resume_name = $applicationInfo['resume'];
            $resume_size = $request->file('resume')->getSize();
            $resume_type = $request->file('resume')->getMimeType();

            // submit to model
            //$applicationInfo['resume_id'] = ""
        }

        if ($request->hasFile('cover_letter')) {
            $applicationInfo['cover_letter'] = $request->file('cover_letter')->store('cover_letters', 'public');

            $user_id = Auth::user()->id;
            $cover_letter_name = $applicationInfo['cover_letter'];
            $cover_letter_size = $request->file('cover_letter')->getSize();
            $cover_letter_type = $request->file('cover_letter')->getMimeType();

            // submit to model
            //$applicationInfo['cover_letter_id'] = ""
        }

        $applicationInfo['user_id'] = Auth::user()->id;
        $applicationInfo['custom_response'] = (!empty($applicationInfo['custom_response'])) ? json_encode($applicationInfo['custom_response']) : "";

        //$application = JobApplication::create($applicationInfo);

        //return redirect('/user/search_job')->with('success', 'You have successfully applied for the job');
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
