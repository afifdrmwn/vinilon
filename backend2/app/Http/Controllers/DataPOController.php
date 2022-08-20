<?php

namespace App\Http\Controllers;

use App\Models\DataPO;
use Illuminate\Http\Request;

class DataPOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DataPO::all();
        if($data) {
            return response()->json($data);
        } else {
            return response()->json(['error' => 'data gagal'],401);
        }
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataPO  $dataPO
     * @return \Illuminate\Http\Response
     */
    public function show(DataPO $dataPO)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataPO  $dataPO
     * @return \Illuminate\Http\Response
     */
    public function edit(DataPO $dataPO)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataPO  $dataPO
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataPO $dataPO)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataPO  $dataPO
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataPO $dataPO)
    {
        //
    }
}
