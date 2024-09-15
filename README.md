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
    if($_POST["coisa"] == "Sim"){
        header("Location: teste.php");
    }
    
    else if(empty($_POST["coisa"]) && $_SERVER['REQUEST_METHOD'] == "POST"){
        echo "Escolhe bobão";
    }
    
    else if($_POST["coisa"] == "Não"){
        echo ":(";
    }
    
    ?>
    <form action="index.php" method="post">
        <br>
        <label>Vai pro meu aniversário?</label>
        <br>
            <input type="radio" name="coisa" value="Sim">
            Sim
            <input type="radio" name="coisa" value="Não">
            Não
            <br>
            <button type="submit">Enviar</button>
            <p style="font-size: smaller;">fiquei com prequiça de deixar bonito</p>       
    </form>
    <a href="https://maps.app.goo.gl/Lnj8qKAkFvks8PpK7">Local</a>
</div> 
</body>
</html>
