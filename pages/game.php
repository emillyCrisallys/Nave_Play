<?php
$api = file_get_contents("http://localhost/Nave_Play/api/games.php");
$dadosApi = json_decode($api);

foreach ($dadosApi as $jogo) {
}
?>



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