<?php

$server="localhost";    
$user="root";
$pass="";
$database="dbswalayanputra";

$koneksi=mysqli_connect($server,$user,$pass,$database);

if(!$koneksi){
    die("gagal :" .
    mysqli_connect_error());
}

?>