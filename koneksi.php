<?php
$connect = mysqli_connect('localhost', 'root', '', 'masoem');

if(mysqli_connect_error()) {
    echo"koneksi gagal".mysqli_connect_error();
}
?>