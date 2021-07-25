<?php
?>
<html>
<head>
    <title>Modificar Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h3>{{request('nome')}}</h3><hr>
    </div>
    <div class="container">
        <form method="get">
            <div class="row">
            <div class="col">
                <label>Nome da lista de tarefa</label>
                <input type="text" value="{{request('nome')}}" class="form-control">
            </div>
            <div class="col">
                    <label>alterar a data de encerramento</label>
                    <input type="date" value="{{request('dataentrega')}}" class="form-control">
            </div>
            </div><br>
            <div class="row">
                <div class="col" align="right">
                    <button class="btn btn-success">Salvar Alteração</button>
                </div>
            </div>
            <div class="row">
                <h3>Lista de Atividades</h3><hr>
                <div class="col" align="right">
                    <button type="button" class="btn btn-primary" onclick="document.location='/novatarefa'">Adicionar Atividade</button>
                </div>
            </div>

        </form>
    </div>


</body>
</html>
