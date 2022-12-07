<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackeryController extends Controller
{
    public function index(){
        $names = ['DONNEX KAMSONGA', 'JAMES MBAKALI', 'FRANK THYOLERA'];
        return view('welcome', $names);
    }

    public function show($id){
        return view('welcome' ,['id'=>$id]);
    }
    public function getNumber($number){
        $number = $number * $number;
        return view('welcome', ['number' => $number]);
    }
}
