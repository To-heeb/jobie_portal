<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use App\Models\Employer;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class EmployerController extends Controller
{
    private $title = 'Employer';

    protected $guard = 'employer';

    public function guard()
    {
        Auth::guard('employer');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('employer.dashboard', [
            //'featured_companies' => Company::all(),
            'jobs' => Job::all(),
            'all_employers' => Employer::count(),
            'all_jobs' => Job::where('company_id', Auth::user()->company_id)->count(),
            'all_applications' => Application::whereIn('job_id', Job::where('company_id', Auth::user()->company_id)->pluck('id'))->count(),
            'title' => $this->title,
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
        return view('auth.employer.register', compact('title'));
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
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'email|required|unique:employers,email',
            'password' =>  'required|min:6',

        ]);

        $userInfo['password'] =  Hash::make($userInfo['password']);

        $employer = Employer::create($userInfo);

        auth()->guard('employer')->login($employer);

        return redirect('/employer/dashboard')->with('success', 'Account successfully created');
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
     * @param  int  $id (removed)
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //dd($request);
        $employerInfo = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => ['required', 'email'],
            //'phone_number' => 'exclude_if:phone_number,null|required',
            'password' => 'exclude_if:password,null|required|min:6|same:password_confirmation',
            'password_confirmation' => 'exclude_if:password_confirmation,null|min:6|required',
            'profile_photo' => 'nullable',
        ]);

        if ($request->hasFile('profile_photo')) {
            $employerInfo['profile_photo'] = $request->file('profile_photo')->store('profile_photos', 'public');
        }

        //dd($request);
        $result = Employer::updateEmployer((object) $employerInfo);

        if ($result)  return redirect('/employer/profile')->with('success', 'Details successfully updated.');
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

    public function user_profile($id)
    {
        $user = User::findOrFail($id);

        return view('employer.users.show', compact('user'));
    }

    // Show Login Form
    public function login()
    {
        $title = $this->title;
        return view('auth.employer.login', compact('title'));
    }

    public function profile()
    {
        $title = $this->title;
        $employer = Employer::find(Auth::id());
        return view('employer.profile', compact('title', 'employer'));
    }

    public function applications()
    {
        // 
        $title = $this->title;
        return view('employer.applications.list', compact('title'));
    }

    public function authenticate(Request $request)
    {
        $employerInfo = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        //dd($request);

        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::guard('employer')->attempt($employerInfo, $remember_me)) {
            $request->session()->regenerateToken();

            return redirect('/employer/dashboard')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/employer/login');
    }
}
