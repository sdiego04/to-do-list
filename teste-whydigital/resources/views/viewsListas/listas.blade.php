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
    <div align="right">
        <button title="voltar" onclick="document.location='/listas'" class="btn btn-primary bi bi-house"></button>
    </div>
    <hr>
    <div align="right">
        <button  title="Nova Lista" type="button" class="btn btn-primary bi bi-clipboard-plus" onclick="document.location='/novalista'" ></button>
    </div><br>
</div>
    <div class="container">
            <?php foreach ($listatarefas as $lista){?>
      <div class="row">
            <div class="col">
                <span style="font-size:160%">{{$lista->nome}}</span>
                <span style="font-size:small" class="text text-muted">{{$lista->dataentrega}}</span>
                <?php if($lista->estatus==true){?>
                    <small class="text text-muted">Tarefa Concluida</small>
                <?php }?>
                <br>
                <span class="bi bi-clipboard-check" >10 /</span>
                <span class="bi bi-clipboard-minus">11 </span>
            </div>
          <div class="col" align="right">
              <form method="get" action="/alterartarefa/{{$lista->id_lista}}+{{$lista->nome}}+{{$lista->dataentrega}}">
                  <button title="Alterar Lista" type="submit" class="btn btn-warning bi bi-clipboard-data"></button>
              </form>
          </div>
      </div><hr>
            <?php }?>
    </div>



</body>

</html>
