<?php

    include 'conexao.php'; 

    $sql = "SELECT codigo, titulo, descricao, realizada FROM tabelatasks";
    $result = $conn->query($sql);

?>