<?php

namespace App\Http\Controllers;

use App\Models\DataContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DataContentController extends Controller
{

    // private $dataContent;
    // public function __construct(DataContent $dataContent)
    // {
    //     $this->dataContent = $dataContent;
    // }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    // LOAD ARQUIVO JSON DO STORAGE
    public function load($id){
        $dataContent = DataContent::where('id', $id)->first();
        return Storage::disk('local')->get($dataContent->url);
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



        $dataContent = new DataContent();

        $dataContent['name'] = $request->name;
        $dataContent['nameProject'] = $request->nameProject;
        $dataContent['description'] = $request->description;
        $dataContent['user_id'] = $request->user_id;
        $dataContent['projects_id'] = $request->projects_id;
        $dataContent['project_types_id'] = $request->project_types_id;

        $dataContent->save();

        $url = '/projetos/'.$request->projects_id.'/'.$dataContent->id.'/'.'data.json';
        $dataContent['url'] = $url;

        $dataContent->save();


        Storage::disk('local')->put($dataContent->url, $request->data);

        return $dataContent;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataContent  $dataContent
     * @return \Illuminate\Http\Response
     */
    public function show(DataContent $dataContent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataContent  $dataContent
     * @return \Illuminate\Http\Response
     */
    public function edit(DataContent $dataContent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataContent  $dataContent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataContent $dataContent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataContent  $dataContent
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataContent $dataContent)
    {
        //
    }
}
