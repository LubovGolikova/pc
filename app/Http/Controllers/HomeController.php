<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Verse;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $verses=Verse::orderBy('views','DESC')->simplePaginate(3);
        return view('home', compact('verses'));
    }
}
