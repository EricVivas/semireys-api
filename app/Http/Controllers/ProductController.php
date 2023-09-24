<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Currency;
use App\Models\Tax;
use App\Utils\Utils;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(['data' => Product::with(['category', 'currencies', 'sales', 'taxes'])->get()]);
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
        $product = $request->except(['currency_id', 'currency_value', 'tax_id']);
        if ($product["image"]) $product["image"] = Utils::saveFile($product["image"], "public/files");
        $product = Product::create($product);
        if ($request->currency_id && $request->currency_value) $product->currencies()->attach($request->currency_id, ['value' =>  $request->currency_value]);
        if ($request->tax_id) $product->taxes()->attach($request->tax_id);
        $product->load('category');
        $product->load('currencies');
        $product->load('sales');
        $product->load('taxes');
        return response()->json(['data' => $product]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product->load('category');
        $product->load('currencies');
        $product->load('sales');
        $product->load('taxes');
        return response()->json(['data' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->all();
        if ($data["image"])
            $data["image"] = Utils::saveFile($product["image"], "public/files");
        return response()->json(['data' => $product->update($data)]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        return response()->json(['data' => $product->delete()]);
    }
}