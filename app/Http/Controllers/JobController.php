<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Job;
use App\Models\User;
use DateTime;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $city = $request->city;
        $jobs = Job::all();
        $site = Job::where('type', 'On-site')->get();
        $remote = Job::where('type', 'Remote')->get();
        $hybrid = Job::where('type', 'Hybrid')->get();
        $cityJobs = Job::where('city', $city)->get();
        return view('jobs.index',['jobs' => $jobs, 'site' => $site, 'remote' => $remote, 'hybrid' => $hybrid, 'city' => $city, 'cityJobs'=> $cityJobs]);
    }

    public function myJobOffers()
    {
        $jobs = Job::where('user_id', Auth::id())->get();
        return view('jobs.myJobOffers',['jobs' => $jobs]);
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
            'img_path' => ['image|mimes:jpg,png,jpeg,gif,svg|max:8192'],
            'jobCategory' => 'required',
            'jobDesciption' => 'required',
            'jobSalary' => ['required', 'numeric'],
            'jobPosition' => 'required',
            'jobPhoneNr' => ['required', 'numeric'],
            'jobCity' => 'required',
            'jobWorkType' => 'required'
        ]);

        $userId = Auth()->id();
        

        if($request->job_img==null){
            $current_job_img_path = null;
        }else {
            $file_name = $request->job_img->getClientOriginalName();
            $current_job_img_path = time().$file_name;
            $request->job_img->move(public_path('images/job_images'),$current_job_img_path);
        }
        $job = Job::create([
            'title' => $request->jobTitle,
            'category_id' => $request->jobCategory,
            'description' => $request->jobDesciption,
            'salary' => $request->jobSalary,
            'position' => $request->jobPosition,
            'phone' => $request->jobPhoneNr,
            'city' => $request->jobCity,
            'type' => $request->jobWorkType,
            'user_id' => $userId,
            'img_path' => $current_job_img_path
        ]);

        $job_tags = explode(",", $request->job_tags);
        $job->tag($job_tags);
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
            'jobTitle' => ['required', 'max:255'],
            'jobDesciption' => 'required',
            'jobSalary' => ['required', 'numeric'],
            'jobPosition' => 'required',
            'jobPhoneNr' => ['required', 'numeric']
        ]);

        $job = Job::find($id);
        $job->title = $request->jobTitle;
        $job->description = $request->jobDesciption;
        $job->salary = $request->jobSalary;
        $job->position = $request->jobPosition;
        $job->phone = $request->jobPhoneNr;
        $job->save();

        return redirect('/myJobOffers')->with('success', 'Job updated.');
    }
    public function viewMyApplications(Request $request){
        $jobsIds = DB::table('applications')->where('user_id',Auth::id())->pluck('job_id')->toArray();
        $jobs = Job::whereIn('id', $jobsIds)->get();
        return view('jobs.myApplications',['jobs' => $jobs, 'user'=> $request->user()]);
    }

    public function jobApplications(Request $request){
        $data = DB::select("SELECT u.id as user_id, a.id as application_id,j.user_id as recruiter_id,u.name,u.gender,u.email,u.phone as user_phonenr, u.current_position , a.created_at as application_date, j.title as job_title, j.description as job_description ,j.salary as job_salary , j.position as job_position ,j.phone as job_phone_nr,j.city, j.type, j.created_at as job_creation from users as u inner join applications as a on u.id= a.user_id inner join jobs as j on a.job_id=j.id");
        $current_user = auth()->user();
        return view('jobs.applications', ['data'=> $data, 'current_user' => $current_user]);
    }

    public function createApplication(Request $request, $id){
        $userId = Auth()->id();

        DB::table('applications')->insert([
            ['user_id' => $userId, 'job_id' => $id, 'created_at' => new DateTime(), 'updated_at' => new DateTime()]
        ]);
        // to be uncommented
        // return redirect('/myApplications')->with('success', 'Application created succesfully.');
        return redirect('/jobs');
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
        return redirect('/myJobOffers')->with('success', 'Job succesfully deleted.');
    }
}
