<?php

namespace App\Http\Controllers;

use App\Models\Change;
use Illuminate\Http\Request;

class ChangeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['data' => Change::with(["currency", "currencyChange"])->get()]);
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
    public function store(Request $request)
    {
        return response()->json(['data' => Change::create($request->all())]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Change $change)
    {
        $change->load("currency");
        $change->load("currencyChange");
        return response()->json(['data' => $change]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Change $change)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Change $change)
    {
        return response()->json(['data' => $change->update($request->all())]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Change $change)
    {
        return response()->json(['data' => $change->delete()]);
    }
}