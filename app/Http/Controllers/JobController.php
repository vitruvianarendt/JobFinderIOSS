<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::all(); 
        return view('jobs.index',['jobs' => $jobs]);
    }

    public function getAllJobsAdmin()
    {
        $jobs = Job::all(); 
        return view('jobs.adminView',['jobs' => $jobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
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
            'title' => ['required', 'max:255'],
            'category' => 'required',
            'description' => 'required',
            'salary' => ['required', 'numeric'],
            'position' => 'required',
            'phone' => ['required', 'numeric'],
            'address' => 'required',
            'type' => 'required'
        ]); 

        $job = Job::create([
            // TODO
        ]);

        $job->save();
        return redirect('/jobs')->with('success', 'Job added succesfully.');
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
