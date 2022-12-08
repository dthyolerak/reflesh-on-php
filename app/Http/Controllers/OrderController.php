<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $order = Orders::all();
        return view('orders.index', ['order'=>$order]);
    }
    public function show($id){
        $order = Orders::where('full_name', $id)->get();
        return view('orders.show', ['order'=>$order]);
    }
    public function create(){
        return view('orders.create');
    }
}
