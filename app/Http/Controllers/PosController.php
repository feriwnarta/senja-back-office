<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PosController extends Controller
{
    public function menu(Request $request) {
        return view('point-of-sales.pos-menu');
    }


    public function category(Request $request) {
        return view('point-of-sales.pos-category');
    }

}