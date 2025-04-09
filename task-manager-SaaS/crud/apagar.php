<?php
    include "conexao.php";

    if (isset($_GET['codigo'])) {
        $cod = $_GET['codigo'];

        $tituloSql = "SELECT titulo FROM tabelatasks WHERE codigo = $cod";
        $tituloRes = mysqli_query($conn, $tituloSql);
        $tituloRow = mysqli_fetch_assoc($tituloRes);
        $titulo = $tituloRow['titulo'];

        $sql = "DELETE FROM tabelatasks WHERE codigo = $cod";
        $res = mysqli_query($conn, $sql);
        $lin = mysqli_affected_rows($conn);

        if ($lin > 0) {
            header("Location: ../model/gerenciador.php?msg=apagado");
            exit();
        } else {
            header("Location: ../model/gerenciador.php?msg=erro_apagar");
            exit();
        }
    } else {
        header("Location: ../model/gerenciador.php?msg=erro_receber");
        exit();
    }

?>