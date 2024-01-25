<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileGuruController extends Controller
{
    public function index()
    {
        return view('profile.profileguru');
    }
}
