<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Category;
use App\Helper\CurrencyExchange;


class CategoryController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // get USD coversion based on current currency
        $currencyRate = CurrencyExchange::getExchangeRate($request->price);

        $price = $currencyRate;

        Category::create([
            "name" =>  $request->name,
            "price" => $price,
            "parent_id" => $request->parent_id,
         ]);
 
         return new JsonResponse([ 'success' => true, 'message' => 'New category added successfully'], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $categories = Category::all();

        if(!count($categories)){

            return new JsonResponse([ 'success' => true, 'message' => "No categoris"], 200);

        }

        return new JsonResponse([ 'success' => true, 'data' => $categories], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
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
        Category::where('id', $id)
        ->update([
            "name" =>  $request->name,
            "price" => $request->price,
            "parent_id" => $request->parent_id,
         ]);

         return new JsonResponse([ 'success' => true, 'message' => 'Category successfully updated'], 200);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::find($id)->delete();

        return new JsonResponse([ 'success' => true, 'message' => 'Category id: '.$id.'successfully deleted'], 200);
    }
}
