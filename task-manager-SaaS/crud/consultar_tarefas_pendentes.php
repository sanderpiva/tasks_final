<?php

  include 'conexao.php';

  $sql = "SELECT COUNT(*) AS total_pendentes FROM tabelatasks WHERE status = 0";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row["total_pendentes"];
  } else {
    echo "0";
  }

  $conn->close();
?>