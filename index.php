<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
    <h4>Consulta de estoque:</h4>
    Selecione o produto: 
    <br>
    <br>
    Geladeira: <input type="radio" value="geladeira" name="nomeP" id=""><br>
    Fogão: <input type="radio" value="fogao" name="nomeP" id="nomeP"><br>
    Microondas: <input type="radio" value="microondas" name="nomeP" id=""><br>
    Maquina de lavar roupa: <input  type="radio" value="lava-roupa" name="nomeP" id=""><br>
    Lava louça: <input type="radio" value="lava-louca" name="nomeP" id=""><br><br>
    <input type="submit" value="Consutar" name="" id="">
    </form>
    <br>
    <h4>Gostaria de fazer um pedido?<a href="pedidos.php"> Clique aqui</a></h4>
</body>
</html>

<?php
    $nomeP = $_POST['nomeP'];

    
    $servername = "localhost";
    $username = "root";
    $password = '';
    $database = "Feletro";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn) {
        die("A conexão do BD falhou: " . mysqli_connect_error()); 
    }else{
        echo "<br /> BD: Conectado <br><br> Estoque disponivel: <br />";
    }

    $sql = "select * from produtos where categoria = '$nomeP';";
    $result = mysqli_query($conn, $sql);

    while($rows = $result -> fetch_assoc()){
       echo "<br />";
       echo " Produto: ".$rows["categoria"]." <br />Descricao do produto: ".$rows["descricao"]." <br /> Preco R$: ".$rows["preco_venda"];
       echo "<hr />";
    }
    
?>
