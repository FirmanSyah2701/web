<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   	public function index(){
   		return view('home');
   	}
   	public function barang(){
   		return view('barang');
   	}
   	public function input_barang(){
   		return view('input_barang');
   	}
}
