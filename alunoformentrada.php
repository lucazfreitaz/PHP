<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Alo Mundo !!!</title>
</head>

<body>
    <form method="post" action="alunoform.php">
        <p>Qual o seu nome ?</p>
        <input type="text" name="usuario"> <br>
        <input type="radio" name="genero" value="m" checked> Masculino<br>
        <input type="radio" name="genero" value="f"> Feminino <br>
        <input type="radio" name="genero" value="other"> Outro <br>
        <input type="submit" value="Enviar"> 
    </form>

    <?php
    /*

if (isset($_POST["usuario"])){
    $nome = $_POST["usuario"];
    $msg = "Olá ".$nome."  tudo bem ?";
    
    ?>
    <script>
            alert("<?php echo $msg ?>");
    </script>
    <?php
    //echo  "<h1> $msg</h1>";
}
*/
    ?>
</body>

</html>