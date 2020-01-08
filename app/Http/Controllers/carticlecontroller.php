<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Requests;
use App\carticle;
use App\Http\Resources\carticle as carticleresource;

class carticlecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get articles
        $carticles = carticle::orderBy('created_at', 'desc')->paginate(5);
        //return collection of articles as a resource
        return carticleresource::collection($carticles);
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
     
     
      $carticles = $request->isMethod('put') ? carticle::findOrFail
        ($request->carticle_id) : new carticle;

        $carticles->id = $request->input('carticle_id');
        $carticles->title = $request->input('title');    
        $carticles->body = $request->input('body');  
    
        if($carticles->save()){
            return new carticleresource($carticles);

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Get single Article
        $carticles = carticle::findOrFail($id);
        //return single article as resource
        return new carticleresource($carticles);

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
        //delete Article
        $carticles = carticle::findOrFail($id);
        if($carticles->delete()){
        return new carticleresource($carticles);
        }

    }
}
