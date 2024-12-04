<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "full_stack";
  
    $conn = new mysqli($servername, $username, $password, $dbname);
  
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM pessoa;";
    $result = $conn->query($sql);

    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
