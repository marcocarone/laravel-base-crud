@extends('layouts.layout')

@section('main')


<form class="margin50" action="{{route("cuffie.store")}}" method="post">
    {{-- inserisco alert con errori --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @csrf
    @method("POST")
    <div class="container-xl">
        <div class="form-row">
            <div class="form-group col-md-3">
                <input class="form-control" type="text" name="marca" value="" placeholder="marca">
            </div>
            <div class="form-group col-md-3">
                <input class="form-control" type="text" name="modello" value="" placeholder="modello">
            </div>
            <div class="form-group col-md-1">
                <input class="form-control" type="text" name="peso" value="" placeholder="peso">
            </div>
            <div class="form-group col-md-3">
                <input class="form-control" type="text" name="caratteristiche" value="" placeholder="caratteristiche">

            </div>
            <div class="form-group col-md-2">
                <input class="form-control" type="text" name="prezzo" value="" placeholder="prezzo">
            </div>
            <div class="form-group col-md-12">
                
                <textarea class="form-control" name="descrizione" rows="6" cols="80" placeholder="descrizione"></textarea>
            </div>

            <div class="form-group col-md-12">
            <button class="btn btn-primary" type="submit" name="button">Salva</button>
            </div>


        </div>
    </div>
</form>

@endsection
