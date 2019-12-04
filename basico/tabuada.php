<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>

<body>
    <header>
        <p>
      <a href="https://meu1sitecomphpcsshtml.000webhostapp.com/#"> <button class="Button" value="Voltar" >Voltar ao menu principal</button> </a> 
        </p>
    </header>
    <form method="post">
        <fieldset>
            <legend>Informe um número para efetuar o cálculo da tabuada:</legend>
            <label for="valor">Número:</label>
            <input type="number" name="valor" value="0" min="0" max="10"> <br>
            <input type="submit" name="enviar" value="Calcular">
        </fieldset>
    </form>

    <?php
    if (isset($_POST["valor"])) {
        $n = $_POST["valor"];
        for ($i = 0; $i < 10; $i++) {
            echo "<h3> $n x $i = " . $n * $i . "</h3>";
        }
    }
    ?>

</body>

</html>