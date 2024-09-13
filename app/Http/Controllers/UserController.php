<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;

class UserController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create()
    {
        return view("users.create");
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function store(StoreUserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return back()->with("success", "User created.");
    }
}
