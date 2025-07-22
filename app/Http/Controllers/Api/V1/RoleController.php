<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\RoleStoreRequest;
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
        return response($roles, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => ['reqired', 'string']
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
     * Update the specified resource in storage.
     */
    public function update(Request $request, Role $role)
    {
        $request->validate([
            'name' => ['reqired', 'string']
        ]);

        $role->name = $request->name;
        $role->save();

        return response(['update' => $role,'message' => 'Item Updated'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Role $role)
    {
        $role->delete();
        return response(['delete' => $role,'message' => 'Item Deleted'], 200);


    }
}
