<?php
$host = 'localhost';
$db = 'db_mahasiswa';
$user = 'root';
$pass = 'Donah';

$conn = new PDO('mysql:host='.$host.';db_mahasiswa='.$db.'', $user, $pass);  
if($conn){
    echo 'connect';
}else{
    echo 'not connect';
}

?>