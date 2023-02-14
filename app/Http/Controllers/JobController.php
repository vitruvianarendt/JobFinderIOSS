<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $jobs = Job::all();
        $site = Job::where('type', 'On-site')->get();
        $remote = Job::where('type', 'Remote')->get();
        $hybrid = Job::where('type', 'Hybrid')->get();
        return view('jobs.index',['jobs' => $jobs, 'site' => $site, 'remote' => $remote, 'hybrid' => $hybrid]);
    }

    public function viewJobsCity(Request $request, $city)
    {
        $jobs = Job::where('city', $city)->get();
        // TO BE COMPLETED THE VIEW
        return view('jobs.index',['jobs' => $jobs]);
    }


    public function getAllJobsAdmin()
    {
        $jobs = Job::all();
        return view('jobs.adminView',['jobs' => $jobs]);
    }

    public function deleteJobAdmin($id)
    {
        Job::find($id)->delete();
        return redirect('/admin/jobs')->with('success', 'Job successfully deleted.');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        $categories = Category::all();
        return view('jobs.create',['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'jobTitle' => ['required', 'max:255'],
            'jobCategory' => 'required',
            'jobDesciption' => 'required',
            'jobSalary' => ['required', 'numeric'],
            'jobPosition' => 'required',
            'jobPhoneNr' => ['required', 'numeric'],
            'jobCity' => 'required',
            'jobWorkType' => 'required'
        ]);

        $userId = Auth()->id();

        $job = Job::create([
            'title' => $request->jobTitle,
            'category_id' => $request->jobCategory,
            'description' => $request->jobDesciption,
            'salary' => $request->jobSalary,
            'position' => $request->jobPosition,
            'phone' => $request->jobPhoneNr,
            'city' => $request->jobCity,
            'type' => $request->jobWorkType,
            'user_id' => $userId
        ]);

        $job->save();
        return redirect('/')->with('success', 'Job added succesfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => ['required', 'max:255'],
            'category' => 'required',
            'description' => 'required',
            'salary' => ['required', 'numeric'],
            'position' => 'required',
            'phone' => ['required', 'numeric'],
            'address' => 'required',
            'type' => 'required'
        ]);
        $job = Job::find($id);
        // TODO
        $job->save();

        return redirect('/jobs')->with('success', 'Job updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Job::find($id)->delete();
        return redirect('/jobs')->with('success', 'Job succesfully deleted.');
    }
}
