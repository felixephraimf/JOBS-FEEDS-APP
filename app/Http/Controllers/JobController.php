<?php

namespace App\Http\Controllers;

use http\Message;
use Illuminate\Http\Request;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return response(['job' => $jobs, 'Message' => 'Here are all the Jobs'], 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Here is where the create View is Returned.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string',],
            'employer_id' => ['required', 'string'],
            'positions' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'category_id' => ['required', 'integer']
        ]);

        $job = Job::query()->create($data);
        return response($job, 200);


    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return response(['job' => $job, 'message' => 'This is the fetched Item'], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //The edit view is returned here
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => ['required', 'string',],
            'employer_id' => ['required', 'string'],
            'positions' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'category_id' => ['required', 'integer']
        ]);

        $job = Job::findOrFail($id);
        $job->title = $request->title;
        $job->employer = $request->employer;
        $job->positions = $request->positions;
        $job->description = $request->description;
        $job->Category_id = $request->Category_id;
        $job->save();
        return response($job,200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return response(['message' => 'Item Deleted'], 200);
    }
}
