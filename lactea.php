<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "planetas";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("falhou : " . $conn->connect_error);
}

$sql = "INSERT INTO plutao (firstname, lastname, email)
VALUES ('plutao', 'anao', 'plutao@lactea')";


if ($conn->query($sql) === TRUE) {
  echo "Tabela criada com sucesso";
} else {
  echo "Error em criar tabela " . $conn->error;
}

$conn->close();
?>
