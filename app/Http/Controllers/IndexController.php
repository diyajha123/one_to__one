<?php

namespace App\Http\Controllers;

use App\Models\Course;


// use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        return Course::with('getcontact')->get();
    }
}
