<?php
    session_start();
    ob_start();

    $_SESSION['correcto'] = 0;

    header("Location: index.php");
?>