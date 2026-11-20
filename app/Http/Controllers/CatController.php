<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $cats = Cat::withCount('product')->get() ;
        return view("dashborad.pages.cats.view" , compact('cats')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("dashborad.pages.cats.add") ;

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $request->validate([
        'name' => "required|string|unique:cats,name" ,
        'img' => "required|image" ,

       ]) ;

       $cat = $request->except('_token') ;
       $img = $request->file('img')->store('cats' , 'public') ;
       $cat['img'] = $img ;

       Cat::create($cat) ;
       return to_route('categorie.index') ;

    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $cat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cat $cat)
    {
        //

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cat $cat)
    {
        return $request ;

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $cat)
    {
        return $cat ;

    }
}
