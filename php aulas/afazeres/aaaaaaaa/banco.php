<?php 
     $dbServidor = '10.10.228.78';
     $dbUsuario  =  'root';
     $dbSenha    =  'Sen@c2024';
     $dbBanco    =  'vitor_santos';


     $conexao = mysqli_connect($dbServidor,$dbUsuario,$dbSenha,$dbBanco);


function buscar_tarefas($conexao){
    $sqlBusca = 'SELECT * FROM tarefas';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $tarefas = [];

    while ($tarefatarefa = mysqli_fetch_assoc($resultado)){
     $tarefas[] = $tarefas;
}

return $tarefas;
}

function gravar_tarefa($conexao, $tarefa){
    if($tarefa['prazo'] == ''){
        $prazo = 'null';
    } else {
        $prazo = '{$tarefa[prazo]}';

    }

$sqlGravar = "
       insert into tarefas
       (
         '{tarefa['nome']}',
         '{tarefa['descricao']}',
         {tarefa['prioridade']},
         {prazo},
         {tarefa['concluida']}
       )
";

    mysqli_query($conexao, $sqlGravar);
}

?>