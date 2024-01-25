<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileSiswaController extends Controller
{
    public function index()
    {
        return view('profilesiswa.profilesiswa');
    }
}
