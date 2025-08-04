<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\JobStoreRequest;
use App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return response($jobs,200);
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
{
    $data = $request->validate([
        'title' => ['required','string','max:255'],
        'employer' => ['required','string','max:255'],
        'positions' => ['required','numeric'],
        'description' => ['required','string','max:255'],
        'category_id' => ['required','numeric']
    ]);


   $job = Job::query()->create($data);

   return response()->json(['job' => $job, 'message' => 'Job added successful.']);
}

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return response($job,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
        $request->validate([
            'title' => ['required', 'string',],
            'employer_id' => ['required', 'string'],
            'positions' => ['required', 'integer'],
            'description' => ['required', 'string'],
            'category_id' => ['required', 'integer']
        ]);

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
        return response(['message' => 'Item deleted'], 200);
    }
}
