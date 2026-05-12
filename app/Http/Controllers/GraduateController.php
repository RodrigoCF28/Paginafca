<?php

namespace App\Http\Controllers;

use App\Models\Graduate;

class GraduateController extends Controller
{
    public function index()
    {
        $graduates = Graduate::all();

        $featured = Graduate::where('destacado', true)
        ->take(8)
        ->get();

        return view('egresados', compact(
            'graduates',
            'featured'
        ));
    }
}