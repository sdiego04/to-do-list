<?php
?>
<html>
<head>
    <title>Adicionar Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <h3>Nova atividade</h3><hr>
    <form method="post" action="/novatarefa">
    <div class="row">
        <div class="col">
            <label>Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="entre com o nome da tarefa">
            <span class="text-danger">@error('nome'){{$message}}@enderror</span>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label>Descricao</label>
            <textarea name="descricao" class="form-control"></textarea><br>
            <span class="text-danger">@error('descricao'){{$message}}@enderror</span>
        </div>
        <div align="right">
            <button type="submit" class="btn btn-success">Salvar</button>
            @csrf
        </div>
    </div>
    </form>
</div>
</body>
</html>
