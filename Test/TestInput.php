<?php 

    require_once "../Helper/Input.php";
    $name = input("Ketikan Nama");
    echo "Hallo $name, Selamat datang di aplikasi Todolist PHP" . PHP_EOL;
    $channel = input("Channel Anda?");
    echo "Nama channel Anda: $channel" . PHP_EOL;
    echo "Terimakasih sudah mengisi formulirnya, selamat beraktifitas!!";
?>
