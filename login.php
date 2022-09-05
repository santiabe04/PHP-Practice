<?php

    echo '<head>
    <title>Login Result</title>
    </head>
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />';

    $userusername = $_POST["username"];
    $userpassword = $_POST["password"];
    $accessgaranted = false;

    $server = "localhost";
    $username = "root";
    $password = "45752350_Sa";
    $database = "mydb";

    $connection = new PDO("mysql:host=$server;dbname=$database", $username, $password);

    $result = $connection->query('SELECT * FROM USUARIOS');
    while ($users = $result->fetch(PDO::FETCH_OBJ)){
        if ((($users->username) == $userusername) && (($users->contrasenia) == $userpassword)) {
            $accessgaranted = true;
            break;
        }
    }
    if ($accessgaranted == true) {
        echo "<ion-text color='success'>
        <h1>Access Garanted</h1>
    </ion-text><br>";
    }
    else {
        echo "<ion-text color='danger'>
        <h1>Access Denied</h1>
    </ion-text><br>";
    }

    $connection = null;

?>