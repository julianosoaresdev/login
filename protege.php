<?php
    if($_SESSION["LOGADO"] != 'OK'){
        echo "<script>window.location.href = 'index.php';</script>";
    }
?>