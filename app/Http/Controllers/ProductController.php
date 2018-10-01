<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ProductController extends Controller
{
    /**
     * [create description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function create(Request $request)
    {
        $product = new Product;
        $product->name = 'God of War';
        $product->price = 40;
        $product->save();
        $category = Category::find([3, 4]);
        $product->categories()->attach($category);
        return 'Success';
    }
    /**
     * [show description]
     * @param  Product $product [description]
     * @return [type]           [description]
     */
    public function show(Product $product)
    {
        return view('show', compact('product'));
    }
    /**
     * [removeCategory description]
     * @param  Product $product [description]
     * @return [type]           [description]
     */
    public function removeCategory(Product $product)
    {
        $category = Category::find(3);
        $product->categories()->detach($category);
        return 'Success';
    }
}
