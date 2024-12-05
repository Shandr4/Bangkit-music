<?php

namespace App\Http\Controllers;

use App\Models\categories;
use app\Models\category;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $categories = categories::all();

        return view('index', compact('categories'));
    }
}

