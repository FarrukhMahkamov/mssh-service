<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function addUser(Request $request, User $user) {

        $user = User::create([
            'name' => $request->input('name'),                
        ]);

    }
}
