<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Client;

class ClientController extends Controller
{
    public function index(){
        return view('clients');
    }
}
