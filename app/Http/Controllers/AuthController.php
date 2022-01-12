<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function addUser(Request $request, User $user) {

        $userInputFields = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email',
            'slug' => 'required|string|slug|unique:users,slug',
            'image' => 'required|image',
        'phone_number' => 'required|number|min:7',
            'state_id' => 'required',
            'region_id' => 'required',
            'address' => 'required',
            'password' => 'required|string|min:6|confirmed'
        ]);

        $user = User::create([
            'name' => $userInputFields['name'],
            'password' => bcrypt($userInputFields['password']),
            'email' => $userInputFields['email'],
            'slug' => $userInputFields['slug'],
            'image' => $userInputFields['image'],
            'phone_number' => $userInputFields['phone_number'],
            'region_id' => $userInputFields['region_id'],
            'address' => $userInputFields['address'],
        ]);

        return $this->success([
            'token' => $user->createToken('API Token')->plainTextToken
        ]);

    }
}
