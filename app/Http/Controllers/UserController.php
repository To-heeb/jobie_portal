<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

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
        $title = $this->title;
        return view('auth.user.register', compact('title'));
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

        $userInfo = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'email|required|unique:users,email',
            'password' =>  'required|min:6',

        ]);

        $userInfo['password'] =  Hash::make($userInfo['password']);

        User::create($userInfo);

        return redirect('/user/dashboard')->with('success', 'Account successfully created');
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


    // Show Login Form
    public function login()
    {
        $title = $this->title;
        return view('auth.user.login', compact('title'));
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
        $jobs = Job::latest()->filter(request(['tag', 'search']))->simplePaginate(20);
        $title = $this->title;
        return view('user.search_job', compact('jobs', 'title'));
    }

    public function companies()
    {
        // 
        return view('user.companies', [
            'featured_companies' => Company::all(),
            'title' => $this->title,
        ]);
    }

    public function show_company()
    {
        // 
        return view('user.companies', [
            'featured_companies' => Company::all(),
            'title' => $this->title,
        ]);
    }

    public function profile()
    {
        return view('user.profile', [
            'featured_companies' => Company::all(),
            'title' => "User"
        ]);
    }
}
