<?php
$server = "localhost";
$username = "root";
$password = "";
$db = "prueba";

try {
  $conn = new PDO("mysql:host=$server;dbname=$db", $username, $password);
} catch (PDOException $e) {
  die ("Ha ocurrido un error en la conexion: $e");
}