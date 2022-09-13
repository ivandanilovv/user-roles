<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RoleController extends Controller
{
    //
    public function store(User $user, Role $role) {
        if (!($user->roles()->where('role_id', '=', $role->id)->exists()))
            $user->roles()->attach($role->id);
    }

    public function index()
    {
        $roles = Role::all();
        return JsonResource::collection($roles);
    }
}
