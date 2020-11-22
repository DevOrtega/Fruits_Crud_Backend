<?php

namespace App\Http\Controllers;

use App\Fruit;
use Illuminate\Http\Request;
use App\Http\Resources\Fruit as FruitResource;
use App\Http\Resources\FruitCollection;
use Carbon\Carbon;
use Illuminate\Validation\Validator;

class FruitController extends Controller
{
    //use Carbon;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new FruitCollection(Fruit::all());
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
        $request->validate([
            'name' => 'required|max:20',
        ]);

        $fruit = Fruit::create($request->all());

        return (new FruitResource($fruit))
                ->response()
                ->setStatusCode(201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new FruitResource(Fruit::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function edit(Fruit $fruit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fruit = Fruit::where("id", $id)->update([
            "name" => $request->name,
            "size" => $request->size,
            "main_color" => $request->main_color,
            "updated_at" => Carbon::now()
        ]);

        return response()->json(["fruit" => $fruit]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fruit  $fruit
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $fruit = Fruit::findOrFail($id);
        $fruit->delete();

        return response()->json(null, 204);
    }
}
