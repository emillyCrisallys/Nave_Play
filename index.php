<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compartible" content="IE=edge">
    <meta name="'viewport" content="width=device-width, initial-scale=1.0">
    <title>NavePlay</title>
    <base href="http://localhost/Nave_Play/">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/Design sem nome sem fundo/8.svg">

</head>

<body>
    <header class="header_logo">
        <nav class="menu-lateral">
            <div class="btn-expandir">
                <i class="bi bi-list" id="btn-exp"></i>
            </div>

            <ul>
                <li class="item-menu ativo">
                    <a href="home">
                        <span class="icon"><i class="bi bi-house-door-fill"></i></span>
                        <span class="txt-link">Home</span>
                    </a>
                </li>

                <li class="item-menu">
                    <a href="game">
                        <span class="icon"><i class="bi bi-joystick"></i></span>
                        <span class="txt-link">Games</span>
                    </a>
                </li>

                <li class="item-menu">
                    <a href="contato">
                        <span class="icon"><i class="bi bi-envelope"></i></span>
                        <span class="txt-link">Contato</span>
                    </a>
                </li>

                <li class="item-menu">
                    <a href="Login">
                        <span class="icon"><i class="bi bi-person-fill"></i></span>
                        <span class="txt-link">Login</span>
                    </a>
                </li>

            </ul>
        </nav>
    </header>

    <main class="centro">


    
    <?php
        if (isset($_GET["param"])) {
            $param = $_GET["param"];
            $p = explode("/", $param);
        }

        $page = $p[0] ?? "home";
        $jogo = $p[1] ?? NULL;

        if ($page == "games") {
            $pagina = "games/{$jogo}.php";
        } else {
            $pagina = "pages/{$page}.php";
        }

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "pages/erro.php";
        }
    ?>

    </main>

    <nav class="base">

    </nav>




    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/fslightbox.js"></script>
    <script src="menu.js"></script>
</body>

</html>