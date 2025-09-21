<?php
include 'conexao.php';

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$categoria = $_POST['categoria'];
$prioridade = $_POST['prioridade'];
$data_hora = $_POST['data_hora'];

$sql = "INSERT INTO tarefas (titulo, descricao, categoria, prioridade, data_hora)
        VALUES ('$titulo','$descricao','$categoria','$prioridade','$data_hora')";

if($conn->query($sql) === TRUE){
    echo "Tarefa adicionada!";
} else {
    echo "Erro: " . $conn->error;
}
$conn->close();
?>