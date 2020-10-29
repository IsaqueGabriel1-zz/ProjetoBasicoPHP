<?php


$servername = "localhost";
$username = "root";
$password = '';
$database = "feletro";

$nomec = $_POST["nomeC"];
$endereco = $_POST["endereco"];
$tele = $_POST["telefone"];
$nomeP = $_POST["nomeP"];
$valorUn = $_POST["valorUni"];
$quant = $_POST["quantidade"];
$valorTot = $_POST["valorTotal"];

$conn = mysqli_connect($servername, $username, $password, $database);

if(!$conn) {
    die("A conexão do BD falhou: " . mysqli_connect_error()); 
}else{
    echo "<br /> BD: Conectado <br><br> Estoque disponivel: <br />";
}
$insert = "insert into pedidos(nomeC, endereco, telefone, nomep, valorUni, quantidade, valorTot)
Values('$nomec', '$endereco', '$tele', '$nomeP', '$valorUn', '$quant', '$valorTot' )";
mysqli_query($conn, $insert);

?>

