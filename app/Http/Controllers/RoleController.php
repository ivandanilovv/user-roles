<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    //
    public function store(User $user, Role $role) {
        $user->roles()->attach($role->id);
        $role->users()->attach($user->id);
    }
}
