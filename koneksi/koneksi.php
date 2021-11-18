<?php

if(!isset($_SESSION)){
    session_start();
}

    $host = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'tubes8';

    //Object Oriented
    // $koneksi = new mysqli($host , $user , $pass, $database);

    //prosedural
    $koneksi = mysqli_connect($host , $user , $pass, $database);

    if($koneksi -> connect_error){
        die("Koneksi Gagal: " .$koneksi -> connect_error);
    }
?>