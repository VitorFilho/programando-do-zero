<html lang="pt-bt">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SOS TRAUMAS</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- BS ICONS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
</head>

<body class="bodylogin">

    <div class="login">
       
        <form action="logar.php" method="POST">
            <div class="container col-md-3 mt-5 p-5 border border-danger">
                <div class="row text-center  mb-3 g-3 ">
                    <h1>Login</h1>
                    <input type="text" name="login" class="loginform"><br><br>
                    <input type="password" name="senha" class="loginform " ><br><br>
                    <!-- <a href="home.php"><button class="btlogin">ENVIAR</button></a> -->
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </div>
        </form>
    </div>

</body>

</html>
<?php
session_start();
session_destroy();
?>