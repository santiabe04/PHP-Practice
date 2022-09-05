<!DOCTYPE html>

<html lang="es">

    <head>

        <title>Login</title>

    </head>

    <body>

        <ion-text color="dark">
            <h1>Login</h1>
        </ion-text>

        <form action="login.php" method="post">
            <ion-item>
                <ion-label position="stacked">Username</ion-label>
                <ion-input placeholder="Username" type="text" name="username"></ion-input>
            </ion-item>
            <ion-item>
                <ion-label position="stacked">Password</ion-label>
                <ion-input placeholder="Password" type="password" name="password"></ion-input>
            </ion-item>
            <br>
            <ion-button color="primary" type="submit">Login</ion-button>
        </form>

        <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
        <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@ionic/core/css/ionic.bundle.css" />

    </body>

</html>