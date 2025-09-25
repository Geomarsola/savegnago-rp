<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Busca todos os produtos do banco
        $products = Product::all();

        // Envia para a view 'home.blade.php'
        return view('home', compact('products'));
    }
}