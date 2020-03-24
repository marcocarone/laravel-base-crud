@extends('layouts.layout')

@section('main')

{{-- @dd($cuffie); --}}

<div class="container-xl margin50">
    @foreach ($cuffie as $cuffia)

    <div class="card">

        <div class="card-body">
            <h2 class="card-title"> Marca: {{$cuffia->marca}}</h2>
            <h4> Modello: {{$cuffia->modello}}</h3>
                <p class="card-text"> Peso:{{$cuffia->peso}}</p>
                <p class="card-text"> Caratteristiche: {{$cuffia->caratteristiche}}</p>
                <p class="card-text"> Descrizione:{{$cuffia->descrizione}}</p>
                <h3 class="card-text"> Prezzo:{{$cuffia->prezzo}}</h3>
                <div class="btn-toolbar">
                  <a class="btn btn-primary m-1" href="{{route("cuffie.show", $cuffia->id )}}">Vedi<span class="sr-only"></span></a>
                  <a class="btn btn-warning m-1" href="{{route("cuffie.edit", $cuffia->id )}}">Modifica<span class="sr-only"></span></a>
                  <form  action="{{route('cuffie.destroy', $cuffia->id)}}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger m-1" type="submit">Cancella</button>
                  </form>
                </div>


        </div>
    </div>
    @endforeach
</div>


@endsection
