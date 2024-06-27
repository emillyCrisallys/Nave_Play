<?php
$api = file_get_contents("http://localhost/Nave_Play/api/games3.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $jogo) {
}
?>

<div class="logo-sofa" >
        <img src="img/Design sem nome sem fundo/6.svg" alt="site-logo" style="width: 10%; height: 20%;margin-left:45%">
        <h2 class="texto_jogo" style="margin-left:10%; color:#FFF">Essas são nossas indicações de jogos de fora pra você</h2>
        <hr/>
    </a>
</div>

<div class="container" style="text-align: center ">
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



