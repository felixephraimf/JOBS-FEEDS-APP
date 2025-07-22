<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Employer;
use Illuminate\Http\Request;

class EmployerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        $employer = Employer::all();
        return response($employer, 200);
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
        return response($employer,200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employer $employer)
    {
        $employer->name = $request->name;
        $employer->save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employer $employer)
    {
        $employer->delete();
        return response(['message' => 'This Item Is deleted.']);
    }
}
