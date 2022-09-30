@extends('layouts.app')
<br>
@section('content')

<h1>Welcome to product section :</h1>

<h2>Product list</h2>
@foreach($product as $n)
<li>{{$n->name}}</li>
@endforeach

@endsection