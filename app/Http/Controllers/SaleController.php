<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use App\Models\Product;
use Illuminate\Http\Request;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $date_start = request()->get('date_start');
        $date_end = request()->get('date_end');
        $sales = [];
        if ($date_start && $date_end)
            $sales = Sale::with(['user', 'products'])->dateBetween($date_start, $date_end)->get();
        else if ($date_start)
            $sales = Sale::with(['user', 'products'])->dateStart($date_start)->get();
        else if ($date_end)
            $sales = Sale::with(['user', 'products'])->dateEnd($date_end)->get();
        else
            $sales = Sale::with(['user', 'products.category'])->get();
        return response()->json(['data' => $sales]);
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
        $sale = null;
        if ($request->products) {
            $attach = [];
            $products = [];
            $products_out_of_stock = [];
            for ($i = 0, $j = 0; $i < count($request->products); $i++) {
                $product = Product::findOrFail($request->products[$i]['id']);
                if ($product->amount - $request->products[$i]['amount'] < 0)
                    $products_out_of_stock[$j++] = $product->name;
                else {
                    $attach[$request->products[$i]['id']] = ['amount' => $request->products[$i]['amount']];
                    $product->amount = $product->amount - $request->products[$i]['amount'];
                    $products[$i] = $product;
                }
            }
            if (count($products_out_of_stock) > 0)
                return response()->json(['error' => 'E1', 'products_out_of_stock' => $products_out_of_stock], 400);
            $sale = Sale::create($request->except('products'));
            $sale->products()->attach($attach);
            for ($i = 0; $i < count($products); $i++)
                $products[$i]->save();
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

    public function metrics(Request $request)
    {
        $date_start = request()->get('date_start');
        $date_end = request()->get('date_end');
        $sales = $date_start && $date_end ? Sale::with('products.category')->dateBetween($date_start, $date_end)->get() : [];
        $total = 0;
        $products = [];
        $categories = [];
        for ($i = 0; $i < count($sales); $i++)
            for ($j = 0; $j < count($sales[$i]->products); $j++) {
                if (isset($products[$sales[$i]->products[$j]['name']])) {
                    $products[$sales[$i]->products[$j]['name']] += $sales[$i]->products[$j]['pivot']['amount'];
                    if (isset($categories[$sales[$i]->products[$j]['category']['name']]))
                        $categories[$sales[$i]->products[$j]['category']['name']] += $sales[$i]->products[$j]['pivot']['amount'];
                    else
                        $categories[$sales[$i]->products[$j]['category']['name']] = $sales[$i]->products[$j]['pivot']['amount'];
                    $total += $sales[$i]->products[$j]['pivot']['amount'];
                } else {
                    $products[$sales[$i]->products[$j]['name']] = $sales[$i]->products[$j]['pivot']['amount'];
                    if (isset($categories[$sales[$i]->products[$j]['category']['name']]))
                        $categories[$sales[$i]->products[$j]['category']['name']] += $sales[$i]->products[$j]['pivot']['amount'];
                    else
                        $categories[$sales[$i]->products[$j]['category']['name']] = $sales[$i]->products[$j]['pivot']['amount'];
                    $total += $sales[$i]->products[$j]['pivot']['amount'];
                }
            }
        return response()->json(['data' => ['total_products' => $total, 'products' => $products, 'categories' => $categories]]);
    }

    public function metricsDate(Request $request)
    {
        $year = request()->get('year');
        $sales = $year ? Sale::with('products.category')->whereYear('created_at', '=', $year)->get() : [];

        $week_days = [
            0 => 0,
            1 => 0,
            2 => 0,
            3 => 0,
            4 => 0,
            5 => 0,
            6 => 0,
        ];

        $months_year = [
            0 => 0,
            1 => 0,
            2 => 0,
            3 => 0,
            4 => 0,
            5 => 0,
            6 => 0,
            7 => 0,
            8 => 0,
            9 => 0,
            10 => 0,
            11 => 0
        ];

        $metrics = (request()->get('type') == 'day') ? $week_days : $months_year;

        for ($i = 0; $i < count($sales); $i++) {
            $total = 0;
            for ($j = 0; $j < count($sales[$i]->products); $j++)
                $total += $sales[$i]->products[$j]['pivot']['amount'];
            if ((request()->get('type') == 'day'))
                $metrics[$this->getNumberDay($sales[$i]->created_at->format('Y-m-d'))] += $total;
            else
                $metrics[$this->getNumberMonth($sales[$i]->created_at->format('Y-m-d'))] += $total;
        }

        return response()->json(['data' => $metrics]);
    }

    public function getNumberDay($date_parameter)
    {
        $date = strtotime($date_parameter);
        return date("w", $date);
    }

    public function getNumberMonth($date_parameter)
    {
        $date = strtotime($date_parameter);
        return date("m", $date) - 1;
    }
}