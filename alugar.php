<?php
    include 'conexaobd.php';

    //Filme
    $cod = $_GET['cod'];
    $sql = "SELECT * FROM filmes WHERE id='$cod'";
    $sql_query = $mysqli->query($sql) or die($mysqli->error);
    $dado = $sql_query->fetch_assoc();


    //Cliente
    if(!isset($_SESSION))
        session_start();
    if(isset($_SESSION['Valid'])){
        $sql1 = "SELECT * FROM clientes WHERE user='$_SESSION[Valid]'";
        $sql_query1 = $mysqli->query($sql1) or die($mysqli->error);
        $dado1 = $sql_query1->fetch_assoc();
    }else{
        echo "<script>alert('Você não está logado.\\n E será redirecionado para página de login!');
        location.href='login.php';</script>";
        
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="aluga.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">LocFilms</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Filmes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"><?php if(isset($_SESSION['Valid'])){echo "Olá, ".$dado1['nome'];}else{echo "Entrar";} ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><?php if(isset($_SESSION['Valid'])){echo "Sair";}else{echo "";} ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    
</body>
</html>