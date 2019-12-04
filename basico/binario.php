<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Número Binario</title>

<body>
    <header>
        <p>
            <a href="https://meu1sitecomphpcsshtml.000webhostapp.com/#"> <button class="Button" value="Voltar">Voltar ao menu principal</button> </a>
        </p>
    </header>
    <form method="POST">
        <fieldset>
            <legend>Informe um número inteiro para conveter em binário:</legend>
            <label for="valor">Número:</label>
            <input type="number" name="valor"/>
            <input type="submit" name="enviar" value="verificar">
        </fieldset>
    </form>

    <?php
    $n = 0; //meu numero
    if (isset($_POST["enviar"])) {
        $n = $_POST["valor"];
        $resultado = $n;
        $binario = "";
        while ($resultado >= 2) {
            $resto = $resultado % 2;
            $resultado = (int)($resultado / 2);
            $binario = $resto . $binario;
        }
        $binario = $resultado . $binario;
        echo "<h3> O número $n em binário é : $binario <?h3>";
    }
    ?>

</body>

</html>