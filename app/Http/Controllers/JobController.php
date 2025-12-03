<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Employer;
use App\Models\User;
#use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;


class JobController extends Controller
{
    
    /**
     * Display a listing of the resource.
    */
    public function index()
    {
        $jobs = Job::all()->groupBy('featured');
        #->latest()->simplePaginate(10);
        // return $jobs;

        return view('jobs.index',[
            'featuredJobs' => $jobs[0],
            'jobs' => $jobs[1],
             'tags'=> Tag::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create', [
            'tags' => Tag::all(),
            'employers' => Employer::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        request()->validate([
            'title' => ['required', 'min:3'],
            'salary' => ['required']
        ]);

        $job = Job::create([
            'title' => request('title'),
            'salary' => request('salary'),
            'employer_id' => 1,
            'featured' => request('featured') ? true : false,
            'location' => request('location'),
            'remote' => request('remote') ? true : false,
        ]);

        // Mail::to($job->employer->user)->queue(
        //     new JobPosted($job)
        //);

        return redirect('/jobs');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    { 
        #$job->load('tags');
        #Auth::user()->can('edit', $job);

        // Gate::define('edit-job', function(User $user,Job $job){
        //     return $job->employer->user->is($user());
        // });

        // if(Auth::guest()){
        //     return redirect('/login');
        // }

        #Gate::authorize('edit-job', $job);

        // if($job->employer->user->isNot(Auth::user())){
        // abort(403, 'Unauthorized action.'); 
        // }

        return view('jobs.edit', [
            'job' => $job
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        Gate::authorize('edit-job', $job);

        $job->update($request->validated());
        return redirect()->route('jobs.show', $job)->with('success', 'Job updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        Gate::authorize('edit-job', $job);

        $job->delete();
        return redirect()->route('jobs.index')->with('success', 'Job deleted successfully.');
    }
}
