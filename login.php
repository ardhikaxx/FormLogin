<?php
$username = "ardhika";
$password = "satuduatiga";

if ($_POST) {
    $input_username = $_POST['username'];
    $input_password = $_POST['password'];

    if ($input_username == $username && $input_password == $password) {
        echo '<script>alert("Login Berhasil!");</script>';
    } else {
        echo '<script>alert("Login gagal, Silahkan coba lagi.");</script>';
    }
}
include 'login.html';
?>