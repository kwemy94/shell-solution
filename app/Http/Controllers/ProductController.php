<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    public function createStepOne(Request $request)
    {
        $product = $request->session()->get('product');

        return view('product.create.step.one', compact('product'));
    }

    public function postCreateStepOne(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:products',
            'amount' => 'required|unique:numeric',
            'description' => 'required'
        ]);

        if(empty($request->session()->get('product')))
        {
            $product = new Product();
            $product->fill($validatedData);    
            $request->session()->put('product', $product);
        }else
        {
            $product = $request->session()->get('product');
            $product->fill($validatedData);    
            $request->session()->put('product', $product);
        }

        return redirect()->route('products.create.step.two');
    }
}
