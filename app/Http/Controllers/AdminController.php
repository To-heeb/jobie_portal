<?php

namespace App\Http\Controllers;

use App\Models\SalaryRange;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    private $title = 'Admin';

    protected $guard = 'admin';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('admin.dashboard', [
            //'featured_companies' => Company::all(),
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


    public function salary_range(Request $request)
    {

        if ($request->method() === Request::METHOD_POST) {
            //dd($request);
            $rangeInfo = $request->validate([
                'start_range' => ['required', 'numeric', 'unique:salary_ranges,start_range'],
                'end_range' => 'required|numeric|unique:salary_ranges,end_range'
            ]);

            //dd($rangeInfo);
            $salary_range = SalaryRange::create($rangeInfo);

            if ($salary_range)  return redirect('/admin/salary_range')->with('success', 'New Salary Range successfully added');
        }

        if ($request->method() === Request::METHOD_PUT) {
            //dd($request);
            $rangeInfo = $request->validate([
                'id' => 'required|integer',
                'start_range_edit' => ['required', 'numeric'],
                'end_range_edit' => 'required|numeric'
            ]);

            //dd($rangeInfo);
            $salary_range = SalaryRange::updateSalaryRange((object) $rangeInfo);

            if ($salary_range)  return redirect('/admin/salary_range')->with('success', 'Salary Range successfully updated.');
        }

        $title = $this->title;
        $salary_ranges = SalaryRange::all();
        return view('admin.jobs.salary_range', compact('title', 'salary_ranges'));
    }

    public function get_salary_range($range_id)
    {

        $rangeInfo = SalaryRange::find($range_id);

        return $rangeInfo;
    }


    // Show Login Form
    public function login()
    {
        $title = $this->title;
        return view('auth.admin.login', compact('title'));
    }

    public function authenticate(Request $request)
    {
        //dd($request);
        $adminInfo = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);


        $remember_me = $request->has('remember_me') ? true : false;

        if (Auth::guard('admin')->attempt($adminInfo, $remember_me)) {
            $request->session()->regenerateToken();

            return redirect('/admin/dashboard')->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
}
