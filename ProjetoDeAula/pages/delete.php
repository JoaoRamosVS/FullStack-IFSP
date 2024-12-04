<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "full_stack";
  
    $conn = new mysqli($servername, $username, $password, $dbname);
  
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET['id'];
    $sql = "DELETE FROM pessoa where id = $id;";
    $conn->query($sql);

    $sql = "DELETE FROM endereco where pessoa_id = $id;";
    $conn->query($sql);

    header('Location: list.php');