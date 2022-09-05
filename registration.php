<?php

    echo '<head>
        <title>Registration Result</title>
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

    $statement = $connection->prepare('INSERT INTO USUARIOS (username,contrasenia) VALUES (:username,:contrasenia)');

    try {
        $statement->execute(array(':username' => $userusername,':contrasenia' => $userpassword));
        echo "<ion-text color='success'>
        <h1>User created successfully</h1>
        </ion-text><br>";
    }
    catch (PDOException $e) {
        //error
        $return = "Error Message: " . $e->getMessage();
        echo "<ion-text color='danger'>
        <h1>$return</h1>
        </ion-text><br>";
    }

    $connection = null;

?>