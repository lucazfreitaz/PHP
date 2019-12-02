<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Alô Mundo !!! </title>
</head>

<body>

    <?php

    $msg = "Clique em volta para colocar nome na pagina de entrada";
    //var_dump($_POST);
    if (isset($_POST["usuario"])) {
        $nome = $_POST["usuario"];
        if ($_POST{
            "genero"} == "m") {
            $msg = "Oá amigo " . $nome . " Tudo bem ?";
        } else {
            if ($_POST{
                "genero"} == "f") {
                $msg = "Oá amiga " . $nome . " Tudo bem ?";
            } else {
            
                $msg = "Oá amigx " . $nome . " Tudo bem ?";
            }
        }
    }
    ?>
    <script>
        alert("<?php echo $msg ?>");
    </script>
    <a href="alunoformentrada.php">Voltar</a>

</body>

</html>