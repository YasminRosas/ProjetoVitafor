<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
</head>

<body>
    @include('menu.index')

    <div class="container my-5">
        <div class="section-header text-center">
            <h2>Projetos</h2>
            <p class="text-muted" syle="font-size 0.5rem">e ferramentas</p>
        </div>
        <div class="row text-center">
            <!-- Card 1 -->
            <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6vqa-KN84YrNujtehO5goqvhJaWwH8gVLTQ&s"
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Figma</h5>
                        <p class="card-text">UI/UX e Design gráfico</p>
                    </div>
                </div>
            </div>
             <!-- Card 2 -->
             <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="data:image/png;base64,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"
                    class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Linguagens</h5>
                        <p class="card-text">HTML, CSS, JS, Java POO, PHP</p>
                    </div>
                </div>
            </div>
             <!-- Card 3 -->
             <div class="col-md-4 mb-4">
                <div class="card shadow">
                    <img src="https://storage.googleapis.com/medium-feed.appspot.com/images%2F9353691196%2Fbf0353ae89496-O-que-e-SQL-Server.jpg"
                     class="card-img-top">
                    <div class="card-body">
                        <h5 class="card-title">Banco de dados</h5>
                        <p class="card-text">Oracle, MySql, SQL Server</p>
                    </div>
                </div>
            </div>
        </div>
        
    <div class="container">
    <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
            <img src="{{ asset('images/kanbanProjetoVitafor.png') }}" class="img-fluid rounded shadow"/>
        </div>
        <div class="col-md-6">
            <h3 class="card-title">Sobre a organização do projeto Vitafor</h3>
            <p class="text-muted" syle="font-size 0.5rem">Feito em Laravel, Bootstrap</p>
            <p class="card-text">
                Para facilitar a visualização do projeto, utilizei a ferramenta Trello
                 modo Kanban para organizar, passei a documentação em forma de card,
                 esse projeto ta imcompleto mas aprendi muito com ele.
            </p>
        </div>
    </div>
    <div class="container">
        <div class="row align-items-center mb-5">
        <div class="col-md-6">
            <h3 class="card-title">Protótipo de um cockpit</h3>
            <p class="text-muted" syle="font-size 0.5rem">Tela feita com Figma com componentes Fiori</p>
            <p class="card-text">
                Fiz esse Protótipo para uma empresa que queria ter a visão geral de suas tarefas. Os funcionários
                tinham metas e atividades internas, diariamente faziam as tarefas.
            </p>
        </div>
    <div class="col-md-6 mb-4 mb-md-0">
        <img src="{{ asset('images/prototipoEmFiori.jpeg') }}" class="img-fluid rounded shadow"/>
    </div>
</div>

    <div class="container">
    <div class="row align-items-center mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
            <img src="{{ asset('images/petFarmaTCC.jpeg') }}" class="img-fluid rounded shadow"/>
        </div>
        <div class="col-md-6">
            <h3 class="card-title">Sistema de farmácia para Pet</h3>
            <p class="text-muted" syle="font-size 0.5rem">Feito em Html, CSS e PHP</p>
            <p class="card-text">
                É um sistema completo de farmácia.
                Desenvolvi a parte do front.
            </p>
        </div>
    </div>
</div>

        <div class="text-center mb-10">
            <img src="{{ asset('images/rick.png') }}" style="width: 60px; height: 60px;" >
            <h4>Projeto Rick and Mortyapi</h4>
            <p class="text-muted">Feito para teste da empresa Vitafor</p>
        </div>

            
        <footer class="text-center mt-5">
            <p class="text-muted" syle="font-size 0.8rem">Projeto Vitafor 2024</p>
        </footer>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<body>
</html>