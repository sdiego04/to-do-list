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
        <h3>{{request('nome')}}</h3>
        <div align="right">
            <button title="voltar" onclick="document.location='/listas'" class="btn btn-primary bi bi-house"></button>
        </div><hr>
    </div>
    <div class="container">
        <form method="get" action="/alterarlista/{{request('id_lista')}}">
            <div class="row">
            <div class="col">
                <label>Nome da lista de tarefa</label>
                <input type="text" value="{{request('nome')}}" class="form-control" name="nome">
                <span class="text text-danger">@error('nome'){{$message}}@enderror</span>
            </div>
            <div class="col">
                    <label>alterar a data de encerramento</label>
                    <input type="date" value="{{request('dataentrega')}}" class="form-control" name="dataentrega">
                    <span class="text text-danger">@error('dataentrega'){{$message}}@enderror</span>
            </div>
            </div><br>
            <div class="row">
                <div class="col" align="right">
                    <button type="submit" title="Salvar Alterações" class="btn btn-warning bi bi-clipboard-data"></button>
                    @csrf
        </form>
                    <button type="button" onclick="document.location='/listaconcluida/{{request('id_lista')}}'" title="Marcar como Realizada" class="btn btn-primary bi bi-clipboard-check" confirmed></button>
                    <button type="button" onclick="document.location='/excluir/{{request(('id_lista'))}}'" title="Excluir Lista" class="btn btn-danger bi bi-clipboard-x"></button>
                </div>
            </div>
            <div class="row">
                <h3>Lista de Atividades</h3><hr>
                <div class="col" align="right">
                    <button title="Salvar" type="button" class="btn btn-success bi bi-clipboard-plus" onclick="document.location='/novatarefa/{{request('id_lista')}}'"></button>
                </div>
            </div>
        <br><br>
            <?php foreach ($tarefa as $tarefa){ ?>
            <div class="row">
                <div class="col">
                    <span>Nome:{{$tarefa->nome}}</span>
                    <?php if($tarefa->estatus==true){?>
                        <small class="text text-muted">Tarefa Realizada</small>
                    <?php }?>
                    <br>
                    <span>Descrição:{{$tarefa->descricao}}</span><br><br>
                </div>
                <div class="col" align="right">
                    <?php if($tarefa->estatus==false){?>
                        <button type="button" onclick="document.location='/alterartarefa/{{$tarefa->id_tarefa}}'" title="Alterar Atividade" class="btn btn-warning bi bi-clipboard-data"></button>
                        <button type="button" onclick="document.location='/tarefaconcluida/{{$tarefa->id_tarefa}}'" title="Marcar como Realizada" class="btn btn-primary bi bi-clipboard-check"></button>
                        <button type="button" onclick="document.location='/excluirtarefa/{{$tarefa->id_tarefa}}'" title="Excluir Atividade" class="btn btn-danger bi bi-clipboard-x"></button>
                    <?php }else{?>
                        <button class="btn btn-secondary bi bi-clipboard-data"></button>
                        <button type="button" onclick="document.location='/tarefainacabada/{{$tarefa->id_tarefa}}'" title="Marcar como Inacabada" class="btn btn-dark bi bi-clipboard"></button>
                        <button class="btn btn-secondary bi bi-clipboard-x"></button>
                    <?php }?>
                </div>
            </div><hr>
            <?php }?>
    </div>


</body>
</html>
