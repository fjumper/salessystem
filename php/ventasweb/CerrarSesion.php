<?php

    session_start();

    $Session = $_POST['Session'];
    session_destroy();
    echo '0';
?>