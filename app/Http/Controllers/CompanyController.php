<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employer;
use App\Models\Industry;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class CompanyController extends Controller
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
        $industries = Industry::all();
        return view('employer.company.create', compact('industries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());
        $companyInfo = $request->validate([
            'name' => ['required', Rule::unique('companies', 'name')],
            'email' => 'email|required',
            'phone_number' => 'required',
            'country' =>  'required',
            'state' =>  'required',
            'city' =>  'required',
            'address' => 'required',
            'employer_type' => ['required', Rule::in(['employee', 'recruiter'])],
            'address' => 'required',
            'industry_id' => 'required',
            'website_link' =>  'nullable',
            'twitter_link' =>  'nullable',
            'facebook_link' =>  'nullable',
            'instagram_link' =>  'nullable',
            'no_of_employees' =>  'required',
            'position_in_company' => Rule::requiredIf($request->employer_type == 'employee'),
            'about' =>  'required',
            'company_logo' => 'required',
        ]);

        if ($request->hasFile('company_logo')) {
            $companyInfo['company_logo'] = $request->file('company_logo')->store('company_logos', 'public');
        }

        $companyInfo['employer_id'] = auth()->user()->id;
        $result = Company::create($companyInfo);

        // Update employers Information;
        $response = Employer::updateEmployerCompany($result->id, $request);
        //$employer = Employer::find(auth()->id());

        if ($response)  return redirect('/employer/dashboard')->with('success', 'Company successfully created');
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
        $industries = Industry::all();
        //dd($industries);
        $companyInfo = Company::where(['id' =>  $id, 'employer_id' => auth()->user()->id])->firstOrFail();
        return view('employer.company.show', compact('companyInfo', 'industries'));
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
        $companyInfo = Company::find($id);
        return view();
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

        //dd($request);
        $companyInfo = $request->validate([
            'name' => 'required',
            'id' => 'required|integer',
            'email' => 'email|required',
            'phone_number' => 'required',
            'country' =>  'required',
            'state' =>  'required',
            'city' =>  'required',
            'address' => 'required',
            'employer_type' => ['required', Rule::in(['employee', 'recruiter'])],
            'address' => 'required',
            'industry_id' => 'required',
            'website_link' =>  'nullable|string',
            'twitter_link' =>  'nullable|string',
            'facebook_link' =>  'nullable|string',
            'instagram_link' =>  'nullable|string',
            'no_of_employees' =>  'required',
            'position_in_company' => Rule::requiredIf($request->employer_type == 'employee'),
            'about' =>  'required'
        ]);

        if ($request->hasFile('company_logo')) {
            $companyInfo['company_logo'] = $request->file('company_logo')->store('company_logos', 'public');
        }

        //dd($request);
        $result = Company::updateCompany((object) $companyInfo);

        // Update employers Information;
        return redirect('/employer/dashboard')->with('success', 'Company successfully updated');
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
