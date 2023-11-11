<?php

namespace App\Http\Controllers;

use App\Models\project;
use Illuminate\Http\Request;

class CommanController extends Controller
{
    public function index()
    {
        $projects = project::all();
        return view("index", compact("projects"));
    }
}
