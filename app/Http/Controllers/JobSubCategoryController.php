<?php

namespace App\Http\Controllers;

use App\Models\JobCategory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\JobSubCategory;

class JobSubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $job_sub_categories = JobSubCategory::all();
        $job_categories =  JobCategory::all();
        return view('admin.job.job_sub_category', compact('job_sub_categories', 'job_categories'));
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
        $subCategoryInfo = $request->validate([
            'name' => ['required', 'unique:job_categories,name'],
            'job_category_id' => ['required', 'numeric']
        ]);

        //dd($rangeInfo);
        $result = JobSubCategory::create($subCategoryInfo);

        if ($result)  return redirect('/admin/job_sub_category')->with('success', 'New Job Sub-Category successfully added');
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
        $subCategoryInfo = $request->validate([
            'id' => 'required|integer',
            'sub_category_name_edit' => ['required', 'unique:job_categories,name'],
            'job_category_id_edit' => ['required', 'numeric']
        ]);

        //dd($industryInfo);
        $result = JobSubCategory::updateJobSubCategory((object) $subCategoryInfo);

        if ($result)  return redirect('/admin/job_sub_category')->with('success', 'Job Sub-Category successfully updated.');
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
        $jobSubCategory = JobSubCategory::find($id);

        if ($jobSubCategory->delete()) {

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

    public function get_job_sub_category($sub_category_id)
    {
        $subCategoryInfo = JobSubCategory::find($sub_category_id);

        return $subCategoryInfo;
    }

    public function get_job_sub_categories($job_category_id)
    {
        $jobSubCategoriesInfo = JobSubCategory::where('job_category_id', $job_category_id)->get();

        return $jobSubCategoriesInfo;
    }
}
