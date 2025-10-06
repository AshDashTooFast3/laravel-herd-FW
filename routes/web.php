<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

//Jobs index

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs,
    ]);
});

//Jobs create

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//Jobs post check

Route::post('/jobs', function () {
    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'location' => request('location'),
        'employer_id' => 1
    ]);

    return redirect('/jobs')->with('success', 'Job created successfully!');
});

//Jobs show

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', [
        'job' => $job,
    ]);
});

//contact 

Route::get('/contact', function () {
    return view('contact');
});
