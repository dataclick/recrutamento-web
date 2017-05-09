<?php

namespace App\Http\Controllers;

use App\Club;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $clubs = Club::orderBy('id', 'desc')->take(5)->get();
        return view('index', compact('clubs'));
    }
}
