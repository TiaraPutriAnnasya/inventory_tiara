<?php
$hostname = 'localhost';
$username ='root';
$password ='';
$database_name = 'db_inventory_tiara';

$conn = mysqli_connect($hostname,$username,$password,$database_name);

if(!$conn){
    die("koneksi Gagal : " . mysqli_connect_error());
}