<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaleController extends Controller
{
    //
}
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\SaleItem;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class SaleController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    public function create()
    {
        $products = Product::all();
        return view('sales.create', compact('products'));
    }

    public function store(Request $request)
    {
        $total = 0;
        foreach ($request->products as $prod) {
            $total += $prod['quantity'] * $prod['price'];
        }

        $sale = Sale::create([
            'user_id' => Auth::id(),
            'total' => $total
        ]);

        foreach ($request->products as $prod) {
            if($prod['quantity'] > 0){
                SaleItem::create([
                    'sale_id' => $sale->id,
                    'product_id' => $prod['id'],
                    'quantity' => $prod['quantity'],
                    'price' => $prod['price']
                ]);
            }
        }

        return redirect()->route('sales.create')->with('success', 'Venda registrada!');
    }

    public function index()
    {
        if(Auth::user()->role == 'admin'){
            $sales = Sale::with('user','items.product')->get();
        } else {
            $sales = Sale::with('items.product')->where('user_id', Auth::id())->get();
        }

        return view('sales.index', compact('sales'));
    }

    public function dashboard()
{
    if(Auth::user()->role != 'admin'){
        abort(403, 'Acesso negado');
    }

    // Total de vendas por frentista
    $salesByUser = \App\Models\User::where('role','frentista')
        ->with(['sales' => function($query) {
            $query->with('items');
        }])->get();

    // Total de vendas por produto
    $products = \App\Models\Product::with('saleItems')->get();

    return view('admin.dashboard', compact('salesByUser','products'));
}
}