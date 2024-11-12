<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    @include('menu.index')
 
    <div class="container my-5">
        <div class="row">
            @foreach ($characters as $character)
            <div class="col-md-4 mb-4">
                <a href="/detailCharacter" class="card shadow">
                    <img src="{{ $character['image'] }}" class="card-img-top">
                    <div class="card-body" >
                        <h5 class="card-title">{{ $character['name'] }}</h5>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body>
</html>