<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['data' => Sale::with(['user', 'products'])->get()]);
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
        $sale = Sale::create($request->except('products'));
        if ($request->products) {
            $attach = [];
            for ($i = 0; $i < count($request->products); $i++)
                $attach[$request->products[$i]['id']] = ['amount' => $request->products[$i]['amount']];
            $sale->products()->attach($attach);
        }
        $sale->load('user');
        $sale->load('currency');
        $sale->load('products');
        return response()->json(['data' => $sale]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        $sale->load('user');
        $sale->load('currency');
        $sale->load('products');
        return response()->json(['data' => $sale]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sale $sale)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sale $sale)
    {
        return response()->json(['data' => $sale->update($request->all())]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        return response()->json(['data' => $sale->delete()]);
    }
}