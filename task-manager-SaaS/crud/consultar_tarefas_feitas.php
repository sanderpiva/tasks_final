<?php

  include 'conexao.php';

  $sql = "SELECT COUNT(*) AS total_concluidas FROM tabelatasks WHERE status = 1";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["total_concluidas"];
  } else {
    echo "0";
  }

  $conn->close();
?>