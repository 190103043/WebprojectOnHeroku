<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MainController;

class MainController extends Controller
{
    public function index(ProductsFilterRequest $request){

    }
    public function changeLocale($locale){
        session(['locale' => $locale]);
        \App::setlocale($locale);
        return redirect() ->back();
    }
}
