<?php
    $host   = 'localhost';
    $user   = 'root';
    $pass   = '';
    $db     = 'db_anggaran';

    $conn = mysqli_connect($host, $user, $pass, $db);
    
    if ($conn){
        //echo "koneksi berhasil";
    }
?>