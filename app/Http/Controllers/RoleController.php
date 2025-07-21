<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = Role::all();
        return response($roles,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
//        return view(''); Here The Create-Role Form View is returned.
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string']
        ]);
        $role = Role::query()->create($data);
        return response($role,200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return response($role, 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //Here a view is returned
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required','string']
        ]);

        $role = Role::findOrFail($id);
        $role->name = $request->name;
        $role->save();
        return response($role, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return response(['message' => 'This Role is Deleted'], 200);
    }
}
