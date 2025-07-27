<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

if (!isset($_GET['page'])) {
    header("Location: index.php?page=home");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles.css" />
    <title>Learning PHP</title>
</head>

<body>

    <?php include 'navbar.php'; ?>
    <main>
        <?php
        // Página padrão
        $pagina = isset($_GET['page']) ? $_GET['page'] : 'home';

        // Caminho da página interna
        $caminho = "pages/" . $pagina . ".php";

        // Verifica se o arquivo existe
        if (file_exists($caminho)) {
            include $caminho;
        } else {
            echo "<p>Página não encontrada.</p>";
        }
        ?>
    </main>


    <?php include 'footer.php'; ?>


</body>

</html>