<?php

    include 'conexao.php';

    $sql = "SELECT COUNT(*) AS total_tarefas FROM tabelatasks";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["total_tarefas"];
    } else {
    echo "0";
    }

$conn->close();
?>