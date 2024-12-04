
<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "full_stack";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $id = $_POST['id']; 
  $nome = $_POST['pessoa']['nome'];
  $sobrenome = $_POST['pessoa']['sobrenome'];
  $cpf = $_POST['pessoa']['CPF'];
  $rg = $_POST['pessoa']['RG'];
  $nascimento = $_POST['pessoa']['data-nascimento'];

  $sql = "UPDATE pessoa SET nome='$nome', sobrenome='$sobrenome', 
  cpf='$cpf', rg='$rg', nascimento='$nascimento' WHERE pessoa.id = $id;";

  if ($conn->query($sql) === TRUE) {
    echo "";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $rua = $_POST['endereco']['rua'];
  $cidade = $_POST['endereco']['cidade'];
  $estado = $_POST['endereco']['estado'];

  $sql = "UPDATE endereco SET rua='$rua', cidade='$cidade', estado='$estado' WHERE pessoa_id = $id;";
  

  if ($conn->query($sql) === TRUE) {
    echo "Dados atualizados com sucesso.";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

?>
