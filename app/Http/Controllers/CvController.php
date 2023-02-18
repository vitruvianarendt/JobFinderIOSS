<?php

namespace App\Http\Controllers;

use App\Models\Cv;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class CvController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create(): View|Factory|Application
    {
        $userId = Auth()->id();
        $cv = Cv::where('user_id', $userId)->first();

        return view('cv.index', ['cv' => $cv]);
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
            'age' => 'required',
            'profession' => 'required',
            'country' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'workdescription' => 'required',
            'degree' => 'required',
            'uni' => 'required',
            'gradyear' => 'required',
            'skills' => 'required',
            'summary' => 'required',
        ]);

        $userId = Auth()->id();

        $cv = Cv::create([
            'user_id' => $userId,
            'name' => $request->name,
            'age' => $request->age,
            'profession' => $request->profession,
            'country' => $request->country,
            'city' => $request->city,
            'zip' => $request->zip,
            'phone' => $request->phone,
            'email' => $request->email,
            'workdescription' => $request->workdescription,
            'degree' => $request->degree,
            'uni' => $request->uni,
            'gradyear' => $request->gradyear,
            'skills' => $request->skills,
            'summary' => $request->summary,
        ]);

        $cv->save();
        return redirect('/preview')->with('success', 'CV created successfully.');
     }

    /**
     * Display the specified resource.
     *
     * @return Application|Factory|View
     */
    public function preview(): Application|Factory|View
    {
        $userId = Auth()->id();
        $cv = Cv::where('user_id', $userId)->first();
        return view('cv.preview', ['cv' => $cv]);
    }

    public function createPDF(): Response
    {
        $userId = Auth()->id();
        $cv = Cv::where('user_id', $userId)->first();
        view()->share('cv',$cv);
        $pdf = PDF::loadView('cv.preview');
        return $pdf->download('my_cv.pdf');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @return Application|Redirector|RedirectResponse
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required',
            'profession' => 'required',
            'country' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'workdescription' => 'required',
            'degree' => 'required',
            'uni' => 'required',
            'gradyear' => 'required',
            'skills' => 'required',
            'summary' => 'required',
        ]);

        $userId = Auth()->id();
        $cv = Cv::where('user_id', $userId)->first();
        $cv->name = $request->name;
        $cv->age = $request->age;
        $cv->profession = $request->profession;
        $cv->country = $request->country;
        $cv->city =$request->city;
        $cv->zip = $request->zip;
        $cv->phone = $request->phone;
        $cv->email = $request->email;
        $cv->workdescription = $request->workdescription;
        $cv->degree = $request->degree;
        $cv->uni = $request->uni;
        $cv->gradyear = $request->gradyear;
        $cv->skills = $request->skills;
        $cv->summary = $request->summary;
        $cv->save();
        return redirect('/preview')->with('success', 'CV edited successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return Application|Redirector|RedirectResponse
     */
    public function destroy()
    {
        $userId = Auth()->id();
        $cv = Cv::where('user_id', $userId)->first();
        $cv -> delete();
        return redirect('/')->with('success', 'CV successfully deleted.');
    }
}
