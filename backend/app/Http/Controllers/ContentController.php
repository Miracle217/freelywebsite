<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class ContentController extends Controller
{
    /**
     * Get a listing of all resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAll()
    {
        $data = Content::all();
        $response = ["data" => $data ];
        return  response( $response, 200 );
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get($id)
    {
        $data = Content::find($id);
        $response = ["data" => $data ];
        return response( $response, 200 );
    }
    
    /**
     * Create a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $data = Content::create($request->all());
        $response = ["data" => $data ];
        return response()->json( $response , 201);
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

        $data = Content::find($id);
        $data->title       = $request->input('title');
        $data->description = $request->input('description');
        $data->save();

        $response = ["data" => $data ];
        return response()->json( $response , 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = Content::find($id);
        $data->delete();

        $response = ["message" => 'Deleted Successfully!' ];
        return response()->json( $response , 200);
    }
}
