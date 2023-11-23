<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productsingleController extends Controller
{
    public function product(){
        return view('product-single');
    }
}
