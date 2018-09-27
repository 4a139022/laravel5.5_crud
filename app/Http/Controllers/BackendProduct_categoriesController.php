<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product_categories;
use Carbon\Carbon;

class BackendProduct_categoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $product_categories = Product_categories::oldest()->paginate(5);
        return view('product_categories.index',compact('product_categories'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a product_categorie resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        //
        return view('product_categories.create');
    }

    /**
     * Store a product_categoriely created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        request()->validate([
            'published_date' => 'required',
            'category' => 'required',
           
        ]);


        Product_categories::create($request->all());

        return redirect()->route('product_categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($product_categories_id)
    {
        //
        $product_categories = Product_categories::find($product_categories_id);
        return view('product_categories.edit',compact('product_categories'));
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
        request()->validate([
            'category' => 'required',
        ]);


        Product_categories::find($id)->update($request->all());

        return redirect()->route('product_categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_categories_id)
    {
        //
        Product_categories::find($product_categories_id)->delete();

        return redirect()->route('product_categories.index');
    }
}
