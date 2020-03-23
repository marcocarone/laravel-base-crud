<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <title>Document</title>
</head>

<body>

  <header>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light ">
      <div class="container-xl">
      <a class="navbar-brand" href="#">Prodotti</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="{{route("cuffie.index")}}">Cuffie<span class="sr-only"></span></a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">

          <li>
            <a class="btn btn-primary" href="{{route("cuffie.create")}}">Aggiungi</a>
          </li>

        </ul>
      </div>
      </div>
    </nav>
  </header>
