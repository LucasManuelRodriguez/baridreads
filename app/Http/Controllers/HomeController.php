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
        $rastas= rasta::paginate(15);
        return view('components.show', compact('rastas'));
    }

    public function about(){
        $rastas= rasta::paginate(4);
        return view('components.about', compact('rastas'));
    }
    
    public function contact(){
        $rastas= rasta::paginate(9);
        return view('components.contact', compact('rastas'));
    }

    public function cart(){

        return view('components.cart');
    }

    public function destroy($id){
        rasta::destroy($id);
        return back();
    }
    
    public function create(){
        return view('components.rastasForm');
    }

    public function store(Request $request){
        $data =[
            'name'=>$request->name,
            'description'=>$request->description,
            'img'=>$request->img,
            'price'=>$request->price,
            'cantidad'=>$request->cantidad
        ];
        rasta::create($data);
        return redirect(route('show'));
    }

    public function edit($id){
        $rasta = rasta::findOrFail($id);
        return view('components.editForm', ['rasta'=>$rasta]);
    }

    public function update(Request $request, $id){
        $rasta = rasta::findOrFail($id);

        $validateData = $request->validate([
            $rasta->name=$request->input('name'),
            $rasta->description=$request->input('description'),
            $rasta->img=$request->input('img'),
            $rasta->price=$request->input('price'),
            $rasta->cantidad=$request->input('cantidad')
        ]);
        $rasta->save($validateData);
        return back();
    }

}
