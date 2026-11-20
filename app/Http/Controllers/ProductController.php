<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Cat;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    $products = Product::with('cat' , 'image')->get() ;

        return view('dashborad.pages.products.view' , compact('products'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cats = Cat::all();
        return view('dashborad.pages.products.add', compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = $request->except('img', '_token');
        $inserted_product = Product::create($product);


        foreach ($request->file('img') as $image) {

            $img_name = $image->store('products', 'public');

            Image::create([

            'imgName' => $img_name ,

            'product_id' => $inserted_product->id ,



            ]);
        }

        return to_route('product.index') ;

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('dashborad.pages.products.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $images = Image::where('product_id' ,$id)->pluck('imgName') ;
        foreach($images as $index => $imgName)
            {

            unlink(storage_path('app/public/' . $imgName));
        }
        product::find($id)->delete() ;
        return to_route('product.index') ;
    }
}
