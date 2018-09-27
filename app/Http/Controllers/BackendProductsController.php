<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Carbon;
use Illuminate\Support\Facades\Storage;
// use Illuminate\Support\Facades\File;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Input;
//使用INPUT::函式


class BackendProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($product_categories_id)
    {
        //
        $products = Products::where('product_categories_id','=',$product_categories_id)->oldest()->paginate(10);
        
        return view('products.index',compact('products'))
        ->with('product_categories_id',$product_categories_id)
        ->with('i', (request()->input('page', 1) - 1) * 5);

        
       
    }

    /**
     * Show the form for creating a product resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_categories_id)
    {
        //
        return view('products.create')
        ->with('product_categories_id',$product_categories_id);
    }

    /**
     * Store a productly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$product_categories_id)
    {
        request()->validate([
            'product_categories_id'=> 'required',
            'picture'=> 'required',
            'name'=> 'required',
            'description'=> 'required',
            'price'=> 'required',
        ]);
 
        $thread->update(['img'=>$request->file('img')->store('threadpics')]);
        
        Storage::putFileAs('picture','public/img', '123.jpg');

        // Storage::putFile('picture', new File('/public/img'), 'public');
        // $path = Input::file('picture')->getClientOriginalName();

        //     echo $path;
        Products::create($request->all());

        // return redirect('products/'.$product_categories_id);
        
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
    public function edit($product_categories_id,$products_id)
    {
        //
        $products = Products::find($products_id);
        return view('products.edit',compact('products'))
        ->with('product_categories_id',$product_categories_id);

      

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $product_categories_id,$products_id)
    {
        //
        request()->validate([
            'product_categories_id' => 'required',
            'picture' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);
     

        Products::find($products_id)->update($request->all());

        return redirect('products/'.$product_categories_id);

        // return "products_id=".$products_id."product_categories_id=".$product_categories_id;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($product_categories_id,$products_id)
    {
        // $products = Products::where('product_categories_id','=',$product_categories_id);
   
        Products::find($products_id)->delete();

        return redirect('products/'.$product_categories_id);
        
        
        // return "product_categories_id=".$product_categories_id."  products_id=".$products_id;

    // return redirect()->back();

        
       
    }
}
