<?php
?>
<html>
<head>
    <title>Tarefas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <h3>Lista de Tarefas</h3>
    <hr>
    <div class="container" align="right">
        <button  type="button" class="btn btn-primary" onclick="document.location='/novatarefa'" >Nova Tarefa</button>
    </div><br>
</div>
    <div class="container">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <span>Nome da tarefa</span>
                <span class="bi bi-clipboard-check" title="tarefas feitas">10 </span>
                <span class="bi bi-clipboard-minus" title="tarefas por fazer">11 </span>
                <button type="button" class="btn btn-warning">Modificar</button>
                <button type="button" class="btn btn-danger float-right">Excluir</button>
            </li>
            <li class="list-group-item">
                <span>Nome da tarefa</span>
                <span class="bi bi-clipboard-check" >10 </span>
                <span class="bi bi-clipboard-minus">11 </span>
                <form method="get" action="/alterartarefa">
                    <button type="submit" class="btn btn-warning">Modificar</button>
                </form>
                <form method="post" action="/excluirTarefa">
                    <button type="button" class="btn btn-danger float-right">Excluir</button>
                </form>
            </li>
            <li class="list-group-item">
                <span>Nome da tarefa</span>
                <span class="bi bi-clipboard-check" >10 </span>
                <span class="bi bi-clipboard-minus">11 </span>
                <button type="button" class="btn btn-warning">Modificar</button>
                <button type="button" class="btn btn-danger float-right">Excluir</button>
            </li>

        </ul>

    </div>
</body>

</html>