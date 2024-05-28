<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/star.png">
    <title>BeatBridge | Login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to bottom, rgba(92, 49, 197, 1), rgba(26, 12, 42, 1));
            height: 100vh;
            background-repeat: no-repeat;
            text-align: center;
            color: white;
        }

        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }

        a{
            text-decoration: none;
            color: white;
            border: 3px solid rgba(92, 49, 197, 1);
            border-radius: 10px;
            padding: 10px;
            transition: .5s;
        }

        a:hover{
            background-color: rgba(92, 49, 197, 1);
        }

    </style>
</head>
<body>
    <H2>BeatBridge</H2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>