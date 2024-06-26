<?php

$id = $p[1] ?? NULL;

$dadosApi = file_get_contents("http://localhost/VaporStore_web/api/games_originals.php/");

$dadosApi = json_decode($dadosApi);

$jogo = $dadosApi->$id;

?>





<h1><?= $jogo->id ?></h1>