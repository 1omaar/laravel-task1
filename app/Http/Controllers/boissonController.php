<?php

namespace App\Http\Controllers;
use App\Boisson;
use Illuminate\Http\Request;

class boissonController extends Controller
{   
    public function index(Request $request){
        $boissons = Boisson::where([
            ['nom','!=',Null],[function($query) use ($request){
                if(($term=$request->term)) {
                    $query->orWhere('nom','LIKE','%'.$term.'%')->get();
                }
            }]
        ])
        ->orderBy('id','desc')
        ->paginate(10);
        return view('welcome',compact('boissons'))->with('1',(request()->input('page',1)-1)*5);
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
    public function edit($id){
        $boisson=Boisson::find($id);
        return view('edit',compact('boisson'));
    }
    public function update(Request $request,$id){
        $boisson=Boisson::find($id);
        $boisson->nom=$request->get('nom');
        $boisson->type=$request->get('type');
        $boisson->prix=$request->get('prix');
        $boisson->quantité=$request->get('quantité');
      
        $boisson->save();
        return redirect('/');
    }
}
