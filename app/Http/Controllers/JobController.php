<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Industry;
use App\Models\JobCategory;
use App\Models\SalaryRange;
use Illuminate\Http\Request;
use App\Models\JobSubCategory;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $title = $this->title;
        return view('employer.jobs.create');
        // return view('listings.index', [
        //     'listings' => Listing::latest()->filter(request(['tag', 'search']))->simplePaginate(6),
        // ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$title = $this->title;
        $job_categories = JobCategory::all();
        $job_sub_categories = JobSubCategory::all();
        $salary_ranges = SalaryRange::all();
        return view('employer.jobs.create', compact('job_categories', 'salary_ranges', 'job_sub_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $jobInfo = $request->validate([
            'title' => 'required',
            'job_category_id' => 'required|numeric',
            'job_sub_category_id' =>  'required|numeric',
            'company_id' =>  'required',
            'type' =>  'required',
            'status' =>  'required',
            'location_type' => 'required',
            'tags' => 'required',
            'level' => 'required',
            'salary_range_id' => 'required|numeric',
            'salary_status' =>  'required',
            'summary' =>  'required',
            'description' =>  'required',
            'start_range' =>  'required',
            'end_range' =>  'required',
            'custom_question'   => 'nullable|array',
            // validate custom field here
            "custom_question.*"  => "required_unless:custom_question,null|string|exclude_if:custom_question,null",
        ]);

        //dd($request);
        $jobInfo['custom_question'] = (!empty($jobInfo['custom_question'])) ? json_encode($jobInfo['custom_question']) : "";

        $job = Job::create($jobInfo);

        return redirect('/employer/dashboard')->with('success', 'Job successfully created');
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
        $job_categories = JobCategory::all();
        $salary_ranges = SalaryRange::all();
        $job_info = Job::where(['id' =>  $id, 'company_id' => auth()->user()->company_id])->firstOrFail();
        return view('employer.jobs.edit', compact('job_categories', 'salary_ranges', 'job_info'));
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

    public function jobs()
    {
        $jobs = Job::where('company_id', auth()->user()->company_id)->get();

        return view('employer.jobs.list', compact('jobs'));
    }
}
