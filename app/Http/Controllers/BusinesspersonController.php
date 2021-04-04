<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusinesspersonController extends Controller
{
    public function index()
    {
        return view('businessperson');
    }
}
