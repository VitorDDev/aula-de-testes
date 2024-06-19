<?php 
session_start();


include "banco.php"
include "auxiliares.php"

$tarefa = [];

if (array_key_exists('nome', $_POST) && $_POST['nome'] != ''){

    $tarefa['nome'] =  $_POST['nome'];
}

if (array_key_exists('descricao', $_POST)){
    $tarefa['descricao'] = $_POST['descricao'];

}

if (array_key_exists('prazo', $_POST)){
    $tarefa['prazo'] = formata_data_para_banco($_POST['prazo']);


if (array_key_exists('prioridade', $_POST)){
    $tarefa['prioridade'] = $_POST['prioridade'];

}

if (array_key_exists('concluida', $_POST)){
    $tarefa['concluida'] = $_POST['concluida'];

}

$_SESSION['lista_tarefas'][] = $tarefa;

if (!isset($_SESSION['lista_tarefas'])){
    $_SESSION['lista_tarefas'] = [];
}

//$_SESSION['lista_tarefas'][] = $tarefa;

gravar_tarefa($conexao, $tarefa);

}

//buscar_tarefas

lista_tarefas = $_SESSION['lista_tarefas'];

include "template.php";
?>