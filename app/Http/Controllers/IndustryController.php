<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $industries = Industry::all();
        return view('admin.company.industry', compact('industries'));
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
        $industryInfo = $request->validate([
            'name' => ['required', 'unique:industries,name'],
        ]);

        //dd($rangeInfo);
        $result = Industry::create($industryInfo);

        if ($result)  return redirect('/admin/industry')->with('success', 'New Industry successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function show(Industry $industry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function edit(Industry $industry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Industry $industry)
    {
        //
        $industryInfo = $request->validate([
            'id' => 'required|integer',
            'industry_name_edit' => ['required', 'unique:industries,name'],

        ]);

        //dd($industryInfo);
        $result = Industry::updateIndustry((object) $industryInfo);

        if ($result)  return redirect('/admin/industry')->with('success', 'Industry successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Industry  $industry
     * @return \Illuminate\Http\Response
     */
    public function destroy(Industry $industry)
    {
        //
    }

    public function get_industry($industry_id)
    {

        $industryInfo = Industry::find($industry_id);

        return $industryInfo;
    }
}
