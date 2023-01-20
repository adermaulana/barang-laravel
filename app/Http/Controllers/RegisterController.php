<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
        public function index() {

        return view('register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request) {

        $validateData = $request->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required|min:5|max:255'
        ]);

        $validateData['password'] = Hash::make($validateData['password']);

        User::create($validateData);

        return redirect('/')->with('success','Registration successfull! Please login');

    }
}
