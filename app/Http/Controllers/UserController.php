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

    protected $guard = 'user';
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
            'recommended_jobs' => Job::all(),
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

        //dd($request->all());
        $userInfo = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|required|unique:users,email',
            'password' =>  'required|min:6',

        ]);

        $userInfo['password'] =  Hash::make($userInfo['password']);

        $user = User::create($userInfo);

        auth()->login($user);

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

    public function job($id)
    {
        //
        $job_details = Job::find($id);
        $title = $this->title;
        return view('user.job', compact('job_details', 'title'));
    }

    public function get_job_details($id)
    {

        $job_details = Job::find($id);
        return $job_details;
    }

    public function companies()
    {
        // 
        return view('user.companies', [
            'featured_companies' => Company::all(),
            'title' => $this->title,
        ]);
    }

    public function company($id)
    {
        $company_info = Company::find($id);
        $title = $this->title;
        return view('user.company', compact('company_info', 'title'));
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

    // Authenticate User/ Log In User
    public function authenticate(Request $request)
    {
        $userInfo = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        //dd($request);

        $remember_me = $request->has('remember_me') ? true : false;

        if (auth()->attempt($userInfo, $remember_me)) {
            $request->session()->regenerateToken();

            return redirect('/user/dashboard')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/user/login');
    }
}
