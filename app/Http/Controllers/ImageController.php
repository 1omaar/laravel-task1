<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    public function store(Request $request,$id )
    {
        
        if ($request->hasFile('image')) {
            //  Let's do everything here
            if ($request->file('image')->isValid()) {
                //
                $validated = $request->validate([
                    'nom' => 'string|max:40',
                    'image' => 'mimes:jpeg,png|max:1014',
                ]);
                $extension = $request->image->extension();
                $request->image->storeAs('/public', $validated['nom'].".".$extension);
                
                $url = Storage::url($validated['nom'].".".$extension);
                
                $file = Image::create([
                    'nom' => $validated['nom'],
                    'path' => $url,
                    'user_id' => $id,
                    ]);
                   
                   
               
                Session::flash('success', "Success!");
                return \Redirect::back();
            }
        }
        abort(500, 'Could not upload image :(');
    }
    // public function viewUploads () {
    //     $images = Image::all();
    //     dd($images);
    //     return view('User.showUser',compact('images'));
    // }
    
    // public function show($id)
    // {
        
    //     $photos = Image::findOrFail($id==$user_id);
        
    //     return view('User.showUser',compact('photos'));
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}