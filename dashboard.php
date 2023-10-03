<?php

session_start();

if (empty($_SESSION)) {
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sistema de login</a>
            <?php
            print "Olá, " . $_SESSION["name"];
            ?>
            <a href="logout.php" class="btn btn-danger">Sair</a>
        </div>
    </nav>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est animi ad numquam necessitatibus quod molestias porro
    magnam, non aliquam, quisquam accusantium soluta minima sequi dolor optio doloribus vel enim consectetur?
</body>