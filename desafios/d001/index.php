<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessor e Antecessor</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>Calculando Sucessor e Antecessor</h1>
    </header>
    <main
    <section>
        <form method="get">
            <label for="numero">Número </label>
            <input type="text" name="numero" id="idnumero">
            <input type="submit" value="Calcular">
        </form>
    </section>
    <?php
        $num = $_GET["numero"] ?? 0;
        $calculoAnte = $num - 1;
        $calculoSuce = $num + 1;
        echo "<p> O Antecessor de '$num' é <strong> $calculoAnte </strong> e O Sucessor é <strong> $calculoSuce </strong>!</p>";
    ?>
    </main>
</body>

</html>