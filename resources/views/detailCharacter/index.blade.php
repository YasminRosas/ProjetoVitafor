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
 
<div class="container py-5">
    <div class="row justify-content-center bg-light p-4 rounded shadow"> 
        @foreach ($characters as $character)
            <div class="col-md-2 text-center">
                <img src="{{ $character['image']}}" class="img-fluid rounded-circle shadow">
            </div>
       
            <div class="col-md-10">
                <h2 class=" display-4 fw-bold mb-3">{{ $character['name']}}</h2>

                <p class="fs-5 mb-2"><strong>Espécie: </strong>{{ $character['species'] }}</p>
                <p class="fs-5 mb-5"><strong>URL: </strong>{{ $character['url'] }}</p>

                <h2>Sobre {{ $character['name']}}</h2>
            
                <p>Rick tem 60 anos e atualmente reside em seu quarto na casa da família Smith. Na garagem, 
                ele trabalha em suas invenções e fórmulas científicas os examina, viajando para outras dimensões, 
                construindo vários robôs e dispositivos e causando caos em diferentes partes do universo.</p>
            </div>

            <div class="text-end mt-4">
                <a href="#" class="btn btn-primary">Salvar</a>
            </div>
        @endforeach
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body>
</html>