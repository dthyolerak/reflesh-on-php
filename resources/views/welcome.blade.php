@extends('layout.layout')
@section('page-title')
<title>Home page</title>
@endsection
@section('content')
    @php
        print_r("hello there");
        echo $number;
    @endphp
    
@endsection

