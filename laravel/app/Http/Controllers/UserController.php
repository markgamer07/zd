<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view('user.show', [
            'title' => 'Show page title',
            'text'  => 'Show page content'
        ]);
    }

    public function all()
    {
        return view('user.all', [
            'title' => 'All users',
            'text'  => 'All users content'
        ]);
    }

    public function profile()
    {
        return view('user.profile', [
            'title' => 'Profile page',
            'text'  => 'Profile content'
        ]);
    }


}
