<?php
    include 'conexaobd.php';

    if(!isset($_SESSION))
        session_start();
    if(isset($_SESSION['Valid'])){
        $sql = "SELECT * FROM clientes WHERE user='$_SESSION[Valid]'";
        $sql_query = $mysqli->query($sql) or die($mysqli->error);
        $dado = $sql_query->fetch_assoc();
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC</title>
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
                        <a class="nav-link" href="login.php"><?php if(isset($_SESSION['Valid'])){echo "Olá, ".$dado['nome'];}else{echo "Entrar";} ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><?php if(isset($_SESSION['Valid'])){echo "Sair";}else{echo "";} ?></a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Procurar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <a href="filmes.php?cod=1">
                        <img src="img/Vingadores A Era de Ultron.jpg" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <a href="filmes.php?cod=2">
                        <img src="img/Animais Fantásticos e Onde Habitam.jpg" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>  
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <a href="filmes.php?cod=3">
                        <img src="img/Baby Driver.jpg" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <a href="filmes.php?cod=4">
                        <img src="img/Django Livre.jpg" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <a href="filmes.php?cod=5">
                        <img src="img/Infiltrado.jpg" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <a href="filmes.php?cod=6">
                        <img src="img/John Wick 2.jpg" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>
        </div>
        <div class="row mt-5 mb-5">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <a href="filmes.php?cod=7">
                        <img src="img/Joker.jpg" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <a href="filmes.php?cod=8">
                        <img src="img/Matrix.jpg" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <a href="filmes.php?cod=9">
                        <img src="img/Venom.jpg" class="card-img-top" alt="...">
                    </a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>