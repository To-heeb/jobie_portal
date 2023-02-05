<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class JobCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $job_categories = JobCategory::all();
        return view('admin.job.job_category', compact('job_categories'));
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
        $categoryInfo = $request->validate([
            'name' => ['required', 'unique:job_categories,name'],
        ]);

        //dd($rangeInfo);
        $result = JobCategory::create($categoryInfo);

        if ($result)  return redirect('/admin/job_category')->with('success', 'New Job Category successfully added');
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
    public function update(Request $request)
    {
        //
        $categoryInfo = $request->validate([
            'id' => 'required|integer',
            'category_name_edit' => ['required', 'unique:job_categories,name'],

        ]);

        //dd($industryInfo);
        $result = JobCategory::updateJobCategory((object) $categoryInfo);

        if ($result)  return redirect('/admin/job_category')->with('success', 'Job Category successfully updated.');
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
        $jobCategory = JobCategory::find($id);

        if ($jobCategory->delete()) {

            return response()->json([
                'status_message' => 'successful',
                'message' => 'Delete job category successfully',
            ], Response::HTTP_NO_CONTENT);
        }

        return response()->json([
            'status' => 'failed',
            'message' => 'Delete job category failed',
        ], Response::HTTP_NOT_FOUND);
    }

    public function get_job_category($category_id)
    {
        $categoryInfo = JobCategory::find($category_id);

        return $categoryInfo;
    }
}
