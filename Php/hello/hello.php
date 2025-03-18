<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
<?php

if (empty($_GET)){
    echo '😡 Donnez une valeur à name.';
    die;
}

if (htmlspecialchars($_GET["name"]==="")) {
    echo '👋 Bonjour Inconnu';
} else {
    echo '👋 Bonjour ' . htmlspecialchars($_GET["name"]) . ' !';
}

?>
</body>
</html>


