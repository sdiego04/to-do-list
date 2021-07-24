<?php
?>
<html>
<head>
    <title>Nova Tarefa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h3>Adicione uma nova lista de tarefa</h3><hr>
    </div>
    <div class="container">
        <form method="post" action="/novatarefa">
            <div class="row">
                <div class="col">
                    <label>Nome da lista:</label>
                    <input class="form-control" type="text" placeholder="digite o nome da lista" name="nome">
                </div>
                <div class="col">
                    <label>Data de encerramento:</label>
                    <input class="form-control" type="date" name="dataentrega">
                    <small class="text text-muted">*data limite para encerrar a tarefa</small>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div align="right">
                        <button type="submit" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </div>
            @csrf
        </form>
    </div>
</body>

</html>
