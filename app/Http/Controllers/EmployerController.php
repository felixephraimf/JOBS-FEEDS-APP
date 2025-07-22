<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employers = Employer::all();
        return response($employers, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Here the Create Form View is returned.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string']
        ]);
        $employer = Employer::query()->create($data);
        return response($employer, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employer $employer)
    {
        return response($employer);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Here the Edit or Update view is returned.
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'string']
        ]);

        $employer = Employer::findOrFail($id);
        $employer->name = $request->name;
        $employer->save();
        return response($employer, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
    {
        $employer->delete();
        return response(['Message' => 'This Item Is deleted.'], 200);
    }
}
