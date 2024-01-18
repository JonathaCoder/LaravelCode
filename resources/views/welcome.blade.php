   @extends('layouts.main')
   @section('title','HDC events')
   @section('content')
   
     <img src="/images/eventimg.png" alt="" >
     <h1>Home</h1>
     @if(10 < 5 ) <h1>sim e maior</h1>
       @endif

       <p>{{$nome}}</p>

       @if(!$nome == 'jonatha')
       <h1>seu jome é {{$nome}} e sua idade é {{$idade}}</h1>
       @else
       <p>Nao esta cadastrado</p>
       @endif

       @for($i = 0; $i < count($arr); $i++) <p>{{$arr[$i]}}</p>
         @endfor

         {{-- comentario com blade--}}
         <!-- comentatio html-->

         @foreach($nomes as $nome)
         <ul>
           <li>{{$nome}}</li>
         </ul>
         @endforeach
@endsection