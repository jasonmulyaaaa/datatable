<?php

namespace App\Http\Controllers;

use App\DataTables\MatterDataTable;
use App\Models\Matter;
use App\Http\Requests\StoreMattersRequest;
use App\Http\Requests\UpdateMattersRequest;

class MatterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(MatterDataTable $dataTable)
    {
        return $dataTable->customRender('Matter/Index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMattersRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Matter $matters)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Matter $matters)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMattersRequest $request, Matter $matters)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Matter $matters)
    {
        //
    }
}
