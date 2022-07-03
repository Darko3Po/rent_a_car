<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return new JsonResponse([ 'success' => true, 'message' => "Welcome to REST API application for managing and reserving cars from a fictive rent a car company"], 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
     
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Slug based on brand, model andregistration_license 
        $registration_licence = $request->brand . '_' .  $request->model . '_' . $request->registration_license;

        Car::create([
            "registration_license" => $registration_licence,
            "brand" => $request->brand,
            "model" => $request->model,
            "manufacture_date" => $request->manufacture_date,
            "description" => $request->description,
            "category_id" => $request->category_id,
            "properties" => $request->properties,
         ]);
 
         return new JsonResponse([ 'success' => true, 'message' => 'New car added successfully'], 200);
 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $cars = Car::all();

        if(!count($cars)){

            return new JsonResponse([ 'success' => true, 'message' => "No cars"], 200);

        }

        return new JsonResponse([ 'success' => true, 'message' => 'All cars', 'data' => $cars], 200);
    }

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
        
        // Slug based on brand, model andregistration_license 
        $registration_licence = $request->brand . '_' .  $request->model . '_' . $request->registration_license;

        Car::where('id', $id)
            ->update([
                "registration_license" => $registration_licence,
                "brand" => $request->brand,
                "model" => $request->model,
                "manufacture_date" => $request->manufacture_date,
                "description" => $request->description,
                "category_id" => $request->category_id,
                "properties" => $request->properties,
            ]);
 
         return new JsonResponse([ 'success' => true, 'message' => 'Car successfully updated'], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Car::find($id)->delete();

        return new JsonResponse([ 'success' => true, 'message' => 'Car id: '.$id.'successfully deleted'], 200);

    }
}
