<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $user = User::first();
        return Auth::guard('api')->login($user);
    }

    public function info(Request $request){
        dd($request->user());
    }
}
