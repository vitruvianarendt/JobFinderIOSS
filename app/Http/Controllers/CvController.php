<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Cv;
use App\Models\Job;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
//    public function index(Request $request)
//    {
//        $city = $request->city;
//        $jobs = Job::all();
//        $site = Job::where('type', 'On-site')->get();
//        $remote = Job::where('type', 'Remote')->get();
//        $hybrid = Job::where('type', 'Hybrid')->get();
//        $cityJobs = Job::where('city', $city)->get();
//        return view('jobs.index',['jobs' => $jobs, 'site' => $site, 'remote' => $remote, 'hybrid' => $hybrid, 'city' => $city, 'cityJobs'=> $cityJobs]);
//    }
//
//    public function getAllJobsAdmin()
//    {
//        $jobs = Job::all();
//        return view('jobs.adminView',['jobs' => $jobs]);
//    }
//
//    public function deleteJobAdmin($id)
//    {
//        Job::find($id)->delete();
//        return redirect('/admin/jobs')->with('success', 'Job successfully deleted.');
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('cv.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse|Redirector|Application
     */
     public function store(Request $request): Application|RedirectResponse|Redirector
     {
        $request->validate([
            'name' => 'required',
            'profession' => 'required',
        ]);

        $userId = Auth()->id();

        $cv = Cv::create([
            'name' => $request->name,
            'profession' => $request->profession,

        ]);

        $cv->save();
        return redirect('/')->with('success', 'Job added succesfully.');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return Response
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Job  $job
     * @return Response
     */
    public function edit($id)
    {
//        $job = Job::find($id);
//        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  \App\Models\Job  $job
     * @return Response
     */
    public function update(Request $request, $id)
    {
//        $request->validate([
//            'title' => ['required', 'max:255'],
//            'category' => 'required',
//            'description' => 'required',
//            'salary' => ['required', 'numeric'],
//            'position' => 'required',
//            'phone' => ['required', 'numeric'],
//            'address' => 'required',
//            'type' => 'required'
//        ]);
//        $job = Job::find($id);
//        // TODO
//        $job->save();
//
//        return redirect('/jobs')->with('success', 'Job updated.');
    }
    public function viewMyApplications(Request $request){
//        $jobsIds = DB::table('applications')->where('user_id',Auth::id())->pluck('job_id')->toArray();
//        $jobs = Job::whereIn('id', $jobsIds)->get();
//        return view('jobs.myApplications',['jobs' => $jobs, 'user'=> $request->user()]);
    }

    public function jobApplications(Request $request){
//        $data = DB::select("SELECT u.id as user_id, a.id as application_id,j.user_id as recruiter_id,u.name,u.gender,u.email,u.phone as user_phonenr, u.current_position , a.created_at as application_date, j.title as job_title, j.description as job_description ,j.salary as job_salary , j.position as job_position ,j.phone as job_phone_nr,j.city, j.type, j.created_at as job_creation from users as u inner join applications as a on u.id= a.user_id inner join jobs as j on a.job_id=j.id");
//        $current_user = auth()->user();
//        return view('jobs.applications', ['data'=> $data, 'current_user' => $current_user]);
    }

    public function createApplication(Request $request, $id){
//        $userId = Auth()->id();
//
//        DB::table('applications')->insert([
//            ['user_id' => $userId, 'job_id' => $id, 'created_at' => new DateTime(), 'updated_at' => new DateTime()]
//        ]);
//        // to be uncommented
//        // return redirect('/myApplications')->with('success', 'Application created succesfully.');
//        return redirect('/jobs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Job  $job
     * @return Response
     */
    public function destroy($id)
    {
//        Job::find($id)->delete();
//        return redirect('/jobs')->with('success', 'Job succesfully deleted.');
    }
}
