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
            <div class="form-group col-md-6">
                <input class="form-control" type="text" name="marca" value="" placeholder="marca">
            </div>
            <div class="form-group col-md-6">
                <input class="form-control" type="text" name="modello" value="" placeholder="modello">
            </div>
            <div class="form-group col-md-6">
                <input class="form-control" type="text" name="peso" value="" placeholder="peso">
            </div>
            <div class="form-group col-md-6">
                <input class="form-control" type="text" name="caratteristiche" value="" placeholder="caratteristiche">

            </div>
            <div class="form-group col-md-6">
                <input class="form-control" type="text" name="descrizione" value="" placeholder="descrizione">
            </div>
            <div class="form-group col-md-6">
                <input class="form-control" type="text" name="prezzo" value="" placeholder="prezzo">
                </div>
                <button class="btn btn-primary" type="submit" name="button">Salva</button>

        </div>
    </div>
</form>

@endsection
