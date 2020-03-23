@extends('layouts.layout')

@section('main')

{{-- @dd($cuffie); --}}

    <div class="container-xl margin50">
      @foreach ($cuffie as $cuffia)

          <div class="card" >
              <img class="card-img-top" src="" alt="">
              <div class="card-body">
              <h2 class="card-title"> Marca: {{$cuffia->marca}}</h2>
              <h4> Modello:  {{$cuffia->modello}}</h3>
              <p class="card-text"> Peso:{{$cuffia->peso}}</p>
              <p class="card-text"> Caratteristiche: {{$cuffia->caratteristiche}}</p>
              <p class="card-text"> Descrizione:{{$cuffia->descrizione}}</p>
              <h3 class="card-text"> Prezzo:{{$cuffia->prezzo}}</h3>


              </div>
           </div>
       @endforeach
    </div>


@endsection
