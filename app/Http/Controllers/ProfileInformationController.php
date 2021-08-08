<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileInformationController extends Controller
{
    public function __invoke(Request $request, $i)
    {
        return view('profile', ['username' => $i]);
    }
}
