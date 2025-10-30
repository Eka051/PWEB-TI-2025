<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        $users = User::with('products')->get();
        // $products = Product::all();

        return view("users", compact("users"));
    }
}
