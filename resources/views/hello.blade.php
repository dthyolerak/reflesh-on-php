@extends('layout.layout')
@section('page-title')
    hello - Bakeryhouse
@endsection

@section('content')
<h1>Reflesh on Laravel</h1>
@if($array)
@foreach ($array as $item)
   <p> {{$item}}</p>
@endforeach
@endif
<p>hello</p>
@for ($i = 0; $i < 3; $i++)
    <p>the vaule of i is {{$i}} </p>
@endfor
@endsection