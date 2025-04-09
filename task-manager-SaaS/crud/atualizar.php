<?php

    include "conexao.php";

    if (isset($_GET['codigo'])) {
        $cod = $_GET['codigo'];

        $sql2 = "SELECT status FROM tabelatasks WHERE codigo = $cod";
        $result = mysqli_query($conn, $sql2);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $value = ($row['status'] == 1) ? 0 : 1;

            $sql = "UPDATE tabelatasks SET status = $value WHERE codigo = $cod";
            $res = mysqli_query($conn, $sql);
            $lin = mysqli_affected_rows($conn);

            if ($lin > 0) {
                header("Location: ../model/gerenciador.php?msg=atualizado");
                exit();
            } else {
                header("Location: ../model/gerenciador.php?msg=erro_atualizar");
                exit();
            }
        } else {
            header("Location: ../model/gerenciador.php?msg=erro_encontrar");
            exit();
        }
    } else {
        header("Location: ../model/gerenciador.php?msg=erro_receber");
        exit();
    }
?>