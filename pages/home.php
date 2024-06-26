<?php
$api = file_get_contents("http://localhost/TechAcademy_2_ajuste/api/games.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $jogo) {
}
?>





<nav class="inicio">
    <a href="index.html" title="logo_Nave_Play" class="logo">
        <img src="img/Nave/1.svg" alt="site-logo" style="width: 10%; height: 20%;">
    </a>
    <div class="menu2">
        <ul>
            <li>
                <a href="index.html" title="Home">Indicações</a>
            </li>

            <li>
                <a href="game.html" title="Game">Ferramenta</a>
            </li>

            <li>
                <a href="sobre.html" title="Sobre">Desenvolvedores</a>
            </li>

            <li>
                <a href="contato.html" title="Contato">Contato</a>
            </li>
        </ul>
    </div>
</nav>




<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" style="z-index: -99;">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="2000">
            <img src="img/jogos/banner.jpg" class="d-block w-100" alt="imagem2">
        </div>
        
        <?php
        foreach ($dadosApi as $jogo) {
        ?>

            <div class="carousel-item" data-bs-interval="2000">
                <img src="<?= $jogo->banner ?>" class="d-block w-100" alt="<?= $jogo->title ?>">
            </div>
        <?php
        }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>






<div class="container-cards row row-cols-1 row-cols-md-2 row-cols-lg-2 row-cols-xxl-3 row-cols-fluid-3 g-4 x-4 mb-5">
    <?php
    foreach ($dadosApi as $jogo) {
    ?>
        <div class="col">


            <div class="card" style="width: 18rem;">
                <img src="<?= $jogo->screenShot01 ?>" class="card-img-top" alt="jogo">
                <div class="card-body">
                    <h5 class="card-title"><?= $jogo->title ?></h5>
                    <a href="<?= $jogo->linkGame ?>" class="btn btn-primary">Jogar</a>
                    <a href="<?= $jogo->linkSiteCriador ?>" class="btn btn-secondary">Site</a>
                </div>
            </div>
        </div>

    <?php
    }
    ?>

</div>