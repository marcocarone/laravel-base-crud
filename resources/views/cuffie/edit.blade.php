@extends('layouts.layout')

@section('main')



<form class="margin50" action="{{route('cuffie.update', $cuffie->id)}}" method="post">

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
    @method('PATCH')
    <div class="container-xl">
        <div class="form-row">
            <div class="form-group col-md-6">
                <input class="form-control" type="text" name="marca" value="{{$cuffie->marca}}" placeholder="marca">
            </div>
            <div class="form-group col-md-6">
                <input class="form-control" type="text" name="modello" value="{{$cuffie->modello}}" placeholder="modello">
            </div>
            <div class="form-group col-md-6">
                <input class="form-control" type="text" name="peso" value="{{$cuffie->peso}}" placeholder="peso">
            </div>
            <div class="form-group col-md-6">
                <input class="form-control" type="text" name="caratteristiche" value="{{$cuffie->caratteristiche}}" placeholder="caratteristiche">

            </div>
            <div class="form-group col-md-6">
                <input class="form-control" type="text" name="descrizione" value="{{$cuffie->descrizione}}" placeholder="descrizione">
            </div>
            <div class="form-group col-md-6">
                <input class="form-control" type="text" name="prezzo" value="{{$cuffie->prezzo}}" placeholder="prezzo">
                </div>


                <input type="hidden" name="id" value="{{$cuffie->id}}">


                <button class="btn btn-primary" type="submit" name="button">Salva</button>

        </div>
    </div>
</form>

@endsection
