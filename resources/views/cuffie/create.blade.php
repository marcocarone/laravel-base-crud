<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <form class="" action="{{route("cuffie.store")}}" method="post">
    @csrf
    @method("POST")
    <input type="text" name="marca" value="" placeholder="marca">
    <input type="text" name="modello" value="" placeholder="modello">
    <input type="text" name="peso" value="" placeholder="peso">
    <input type="text" name="caratteristiche" value="" placeholder="caratteristiche">
    <input type="text" name="descrizione" value="" placeholder="descrizione">
    <input type="text" name="prezzo" value="" placeholder="prezzo">
    <button type="submit" name="button">Salva</button>
  </form>


</body>
</html>
