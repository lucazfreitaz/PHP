<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Núemero primo</title>

<body>
    <header>
        <p>
            <a href="https://meu1sitecomphpcsshtml.000webhostapp.com/#"> <button class="Button" value="Voltar">Voltar ao menu principal</button> </a>
        </p>
    </header>
    <form method="POST">
        <fieldset>
            <label for="valor">Número</label>
            <legend>Informe um número para verificar se ele é um número primo:</legend>
            <select name="valor">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="outrovalor">Definir manualmente</option>
            </select>
            <br>
            <label for="outrovalor">Número:</label>
            <input type="number" name="outrovalor" />
            <input type="submit" name="enviar" value="verificar">
        </fieldset>
    </form>

    <?php
    $n = 0;
    $contador = 0;

    if (isset($_POST["enviar"])) {
        if ($_POST["valor"] != "outrovalor") {
            $n = $_POST["valor"];
        } else {
            $n = $_POST["outrovalor"];
        }
        //lógica determinar se um número é primo
        for ($i = 1; $i <= $n; $i++) {
            if ($n % $i == 0) {
                $contador++;
            }
        }
        if ($contador == 2 | $n ==1) {
            echo "<h1> o numero $n é um número primo </h1>";
        } else {
            echo "<h1> o numero $n  não é um número primo </h1>";
        }
    }
    ?>

</body>

</html>