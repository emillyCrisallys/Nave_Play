<?php
$api = file_get_contents("http://localhost/Nave_Play/api/games.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $jogo) {
}
?>





<div class="inicio">
    <a href="home.php" title="logo_Nave_Play" class="logo">
        <img src="img/Nave/1.svg" alt="site-logo" style="width: 10%; height: 20%;">
    </a>
    <div class="menu2">
        <ul>
            <li>
                <a href="pages/indicacoes.php" title="Indicacao">Indicações</a>
            </li>

            <li>
                <a href="pages/ferramenta.php" title="Ferramenta">Ferramenta</a>
            </li>

            <li>
                <a href="pages/desenvolvedores.php" title="Desenvolvedor">Desenvolvedores</a>
            </li>

        </ul>
    </div>
</div>


<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
  <?php
        $a = " active ";
        foreach ($dadosApi as $jogo) {
        ?>

            <div class="carousel-item <?=$a?>" data-bs-interval="2000">
                <img src="<?= $jogo->banner ?>" class="d-block w-100" alt="<?= $jogo->title ?>">
            </div>
        <?php
        $a = "";
        }
        
        ?>
    
  
  </div>
</div>


<div class="container">
    <div class="row">
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

</div>