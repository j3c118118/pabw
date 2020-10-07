<?php
    $host   = "localhost";
    $user   = "root";
    $psw    = "";
    $db_name= "crud_pabw";
    $kon = mysqli_connect($host,$user,$psw,$db_name);

    if (!$kon){
        die ('Gagal terhubung dengan database:'.mysqli_connect_error());
    }

?>