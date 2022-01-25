<?php

namespace App\Http\Controllers;

use App\Models\rasta;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $rastas = rasta::paginate(3);
        return view('components.index', compact('rastas'));
    }

    public function show(){
        $rastas= rasta::paginate(9);
        return view('components.show', compact('rastas'));
    }

    public function about(){
        $rastas= rasta::paginate(9);
        return view('components.about', compact('rastas'));
    }
    
    public function contact(){
        $rastas= rasta::paginate(9);
        return view('components.contact', compact('rastas'));
    }


}
