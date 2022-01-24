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
        $rastas = rasta::paginate(5);
        return view('components.index', compact('rastas'));
    }

    public function show(){
        return view('components.show');
    }

    public function about(){
        return view('components.about');
    }
    
    public function contact(){
        return view('components.contact');
    }


}
