<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do personagem</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @include('menu.index')
 
   <div class="container my-5">
    <div class="row justify-content-center bg-light p-4 rounded shadow"> 
        @foreach ($characters as $character)
            <div class="col-md-4">
                <img src="{{ $character['image']}}" class="img-fluid rounded-circle shadow">
            </div>
       
            <div class="col-md-8">
                               <h2 class="text-primary display-4 fw-bold mb-3">{{ $character['name']}}</h2>
                <p class="fs-4 mb-2"><strong>Espécie: </strong>{{ $character['species'] }}</p>
                <p class="fs-4 mb-4"><strong>URL: </strong>{{ $character['url'] }}</p>
            </div>
        @endforeach
    </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body>
</html>