<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="coisa">
    <?php 
    if(!empty($_POST["nome"])){
        $servername = "localhost";
        $password = "Info@1234";
        $useranme = "admin";
        $database = "site";

        $conn = mysqli_connect($servername, $useranme, $password, $database);
        $var = true;
        $nome=$_POST["nome"];
        $resultado = mysqli_query($conn, "INSERT INTO convite (nome, confirmacao) VALUES ('$nome', $var)");
        
        echo "VAMOOOOOO";
        
    }

    else if($_SERVER["REQUEST_METHOD"] == "POST"){
        echo "Coloca o nome bobão";
    }?>
    <form action="teste.php" method="post">
        Nome:
        <input name="nome">
        <button type="submit">Enviar</button>
    </form>
    </div>
</body>
</html>
