@extends('layouts.layout')

@section('main')



    <div class="container-xl margin50">


          <div class="card" >

              <div class="card-body">
              <h2 class="card-title"> Marca: {{$cuffie->marca}}</h2>
              <h4> Modello:  {{$cuffie->modello}}</h3>
              <p class="card-text"> Peso:{{$cuffie->peso}}</p>
              <p class="card-text"> Caratteristiche: {{$cuffie->caratteristiche}}</p>
              <p class="card-text"> Descrizione:{{$cuffie->descrizione}}</p>
              <h3 class="card-text"> Prezzo:{{$cuffie->prezzo}}</h3>


              </div>
           </div>

    </div>


@endsection
