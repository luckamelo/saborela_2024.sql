<?php
include 'conexao.php';

$sql = "SELECT * FROM tarefas ORDER BY data_hora ASC";
$result = $conn->query($sql);

$tarefas = array();
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        $tarefas[] = $row;
    }
}
echo json_encode($tarefas);
$conn->close();
?>