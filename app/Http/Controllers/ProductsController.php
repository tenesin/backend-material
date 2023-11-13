<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function adding(Request $request) {
        $items = new Products();
        $items-> name = $request->name;
        $items-> price = $request->price;
        $items-> stocks = $request->stocks;
        $items-> save();

        return response()->json('Added Success!');
    }

    public function edit(Request $request)
    {
        $items = Products::findorfail($request->id);
        $items-> name = $request->name;
        $items-> price = $request->price;
        $items-> stocks = $request->stocks;
        $items-> update();

        return response()->json('Updated Success!');
    }

    public function getData()
    {
        $items = Products::all();
        return response()->json($items);
    }
}

