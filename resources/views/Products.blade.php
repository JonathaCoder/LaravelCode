@extends('layouts.main')
@section('title','Produtos')
@section('content')

<h1>esta na pagina de produto</h1>
  
 @if($busca != '')  <h1>ouve uma busca pelo produto {{$busca}}</h1> @endif


@endsection