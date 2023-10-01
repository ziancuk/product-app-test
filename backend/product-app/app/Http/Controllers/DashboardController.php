<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('home');
    }

    public function dashboard() {
        $user = User::count();
        $user_active = User::where('status', 1)->count();
        $product = Product::count();
        $product_active = Product::where('status', 1)->count();
        $latest_product = Product::orderBy('created_at', 'desc')
        ->take(10)
        ->get();

        $data = [
            'totalUser' => $user,
            'totalUserAktif' => $user_active,
            'totalProduct' => $product,
            'totalProductAktif' => $product_active,
            'dataProduct' => $latest_product
        ];

        return view('dashboard.index',compact('data'));
    }
}
