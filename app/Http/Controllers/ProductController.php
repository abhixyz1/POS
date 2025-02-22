<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage()
    {
        $products = [
            ['name' => 'Coca-Cola', 'price' => 10],
            ['name' => 'Pepsi', 'price' => 9],
            ['name' => 'Sprite', 'price' => 8],
        ];
        return view('products.category', ['products' => $products, 'category' => 'Food & Beverage']);
    }

    public function beautyHealth()
    {
        $products = [
            ['name' => 'Face Cream', 'price' => 50],
            ['name' => 'Body Lotion', 'price' => 30],
            ['name' => 'Shampoo', 'price' => 25],
        ];
        return view('products.category', ['products' => $products, 'category' => 'Beauty & Health']);
    }

    public function homeCare()
    {
        $products = [
            ['name' => 'Detergent', 'price' => 20],
            ['name' => 'Floor Cleaner', 'price' => 15],
            ['name' => 'Dish Soap', 'price' => 10],
        ];
        return view('products.category', ['products' => $products, 'category' => 'Home Care']);
    }
    public function babyKid()
    {
        $products = [
            ['name' => 'Diapers', 'price' => 40],
            ['name' => 'Baby Milk', 'price' => 60],
            ['name' => 'Toys', 'price' => 30],
        ];
        return view('products.category', ['products' => $products, 'category' => 'Baby & Kid']);
    }
}
