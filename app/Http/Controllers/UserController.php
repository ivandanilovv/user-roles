<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::query()->with('roles')->get();
        return JsonResource::collection($users);
    }
}
