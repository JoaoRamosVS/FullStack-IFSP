
<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "full_stack";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $nome = $_POST['pessoa']['nome'];
  $sobrenome = $_POST['pessoa']['sobrenome'];
  $cpf = $_POST['pessoa']['CPF'];
  $rg = $_POST['pessoa']['RG'];
  $nascimento = $_POST['pessoa']['data-nascimento'];

  $sql = "INSERT INTO `pessoa` (`nome`, `sobrenome`, `cpf`, `rg`, `nascimento`) 
  VALUES ('$nome', '$sobrenome', '$cpf', '$rg', '$nascimento');";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $pessoa_id = $conn->insert_id;

  $rua = $_POST['endereco']['rua'];
  $cidade = $_POST['endereco']['cidade'];
  $estado = $_POST['endereco']['estado'];

  $sql = "INSERT INTO `endereco` (`pessoa_id`, `rua`, `cidade`, `estado`)
          VALUES ('$pessoa_id', '$rua', '$cidade', '$estado');";
  

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

?>
