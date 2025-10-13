<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

//Jobs Index

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);
    return view('jobs.index', [
        'jobs' => $jobs,
    ]);
});

//Jobs Create

Route::get('/jobs/create', function () {
    return view('jobs.create');
});

//Jobs Store

Route::post('/jobs', function () {

    request()->validate([
        'title' => 'required|string|min:3|max:255',
        'salary' => 'required|min:0',
        'location' => 'required|string|min:1|max:255',
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'location' => request('location'),
        'employer_id' => 1
    ]);

    return redirect('/jobs')->with('success', 'Job created successfully!');
});

//Jobs Show

Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);
    return view('jobs.show', [
        'job' => $job,
    ]);
});

//Jobs Edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);
    return view('jobs.edit', [
        'job' => $job,
    ]);
});

//Jobs Update

Route::patch('/jobs/{id}', function ($id) {

    request()->validate([
        'title' => 'required|string|min:3|max:255',
        'salary' => 'required|min:0',
        'location' => 'required|string|min:1|max:255',
    ]);

    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
        'location' => request('location'),
    ]);

    return redirect('/jobs/' . $job->id);
});

//Jobs Delete
Route::delete('/jobs/{id}', function ($id) {
    Job::findOrFail($id)->delete();

    return redirect('/jobs');
});

//contact

Route::get('/contact', function () {
    return view('contact');
});
