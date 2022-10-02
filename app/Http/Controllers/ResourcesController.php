<?php

namespace App\Http\Controllers;

use App\Models\Resource;
use Illuminate\Http\Request;

class ResourcesController extends Controller
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
        return view('dashboard_public.resources.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $resource = Resource::create([
            'categ_id' => $request->categ_id, 
            'user_id' => $request->user_id, 
            'name' => $request->name, 
            'description' => $request->description, 
            'url_image' => $request->url_image, 
            'link' => $request->link
        ]);

        if(!$resource){
            return view('dashboard_public.resources.create', ['msg' => "no se creo"]);
        }
        return view('dashboard_public.resources.create', ['msg' => "Se creo"]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resource = Resource::where('id_resource', $id)->first();

        if(!$resource){
            return view('public.resources.detail', ['msg' => "no existe"]);
        }
        return view('public.resources.detail', compact('resource'));
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
        $resource = Resource::where('id_resource', $id)->delete();

        if(!$resource){
            return view('public.resources.detail', ['msg' => "no se eliminó"]);
        }
        return view('public.resources.detail', ['msg' => "Se eliminó"]);
    }
}
