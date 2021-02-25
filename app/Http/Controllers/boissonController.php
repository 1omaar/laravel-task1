<?php

namespace App\Http\Controllers;
use App\Boisson;
use Illuminate\Http\Request;

class boissonController extends Controller
{   
    public function index(){
        $boissons = Boisson::all();
        return view('welcome',['boissons'=>$boissons]);
    }
    public function show($id){
        $boisson = Boisson::find($id);
        return view('show',['boisson'=>$boisson]);
    }
    public function create(){
        return view('add');
    }
    public function store(){
        $boisson = new Boisson();
        $boisson->nom=request('nom');
        $boisson->type=request('type');
        $boisson->prix=request('prix');
        $boisson->quantité=request('quantité');
        $boisson->save();
        return redirect('/');
    }
    public function destroy($id){
        $boisson = Boisson::find($id);
        $boisson->delete();

        return redirect('/')->with('delete', 'Contact deleted!');
    }
}
