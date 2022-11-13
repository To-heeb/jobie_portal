<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class UserController extends Controller
{


    private $title = 'User';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('user.dashboard', [
            'featured_companies' => Company::all(),
            'title' => "User"
        ]);
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
        return view('user.profile', [
            'featured_companies' => Company::all(),
            'title' => "User"
        ]);
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


    // Show Login Form
    public function login()
    {
        return view('auth.user.login');
    }


    public function applications()
    {
        //
        return view('user.applications', [
            'featured_companies' => Company::all(),
            'title' => $this->title
        ]);
    }

    public function search_job()
    {
        //
        return view('user.search_job', [
            'featured_companies' => Company::all(),
            'title' => $this->title
        ]);
    }

    public function companies()
    {
        //
        return view('user.companies', [
            'featured_companies' => Company::all(),
            'title' => $this->title,
        ]);
    }
}
