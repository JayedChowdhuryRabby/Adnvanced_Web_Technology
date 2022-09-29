@extends('layouts.app')
<br>
@section('content')

<h1>Welcome to product section :</h1>

<h2>Product list</h2>
@foreach($ProductNames as $n)
<li>{{$n}}</li>
@endforeach

@endsection