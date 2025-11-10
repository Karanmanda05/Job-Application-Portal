<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPost;

class JobPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Listing = JobPost::all();
        return view('ListingPage' , compact("Listing"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('JobPost');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $jobPost = new JobPost();
        $jobPost->company_name = $request->company_name;
        $jobPost->company_address= $request->company_address;
        $jobPost->company_contact= $request->company_contact;
        $jobPost->job_title= $request->job_title;
        $jobPost->job_type= $request->job_type;
        $jobPost->job_category= $request->job_category;
        $jobPost->job_description= $request->job_description;
        $jobPost->job_responsibility= $request->job_responsibility;
        $jobPost->job_skills= $request->job_skills;
        $jobPost->job_experience= $request->job_experience;
        $jobPost->job_qualification= $request->job_qualification;
        $jobPost->job_salary= $request->job_salary;
        $jobPost->job_perks= $request->job_perks;
        $jobPost->job_city= $request->job_city;
        $jobPost->job_state= $request->job_state;
        $jobPost->job_country= $request->job_country;
        $jobPost->save();


        return redirect()->route("job.index");
    }

   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $Job = JobPost::findorfail($id);
        return view('JobEditForm' , compact('Job'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $Job = JobPost::findorfail($id);

        $Job->company_name = $request->company_name;
        $Job->company_address= $request->company_address;
        $Job->company_contact= $request->company_contact;
        $Job->job_title= $request->job_title;
        $Job->job_type= $request->job_type;
        $Job->job_category= $request->job_category;
        $Job->job_description= $request->job_description;
        $Job->job_responsibility= $request->job_responsibility;
        $Job->job_skills= $request->job_skills;
        $Job->job_experience= $request->job_experience;
        $Job->job_qualification= $request->job_qualification;
        $Job->job_salary= $request->job_salary;
        $Job->job_perks= $request->job_perks;
        $Job->job_city= $request->job_city;
        $Job->job_state= $request->job_state;
        $Job->job_country= $request->job_country;
        $Job->save();
        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $Job = JobPost::findorfail($id);
        $Job->delete();
        return redirect()->route('job.index');
    }
}
