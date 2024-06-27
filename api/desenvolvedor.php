<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");


$path = "http://localhost/Nave_Play/";



$desenvolvedores[1] = array(
    "id" => 1,
    "title" => "Emilly Crisallys",
    "description" => "Alunos de TADS",

    "linkGame" => "https://github.com/emillyCrisallys",
    "screenShot01" => "{$path}img/Emilly.jpg",
    "banner" => "{$path}img/Emilly.jpg",
    "criador" => "Emilly Crisallys",
   "linkSiteCriador" => "https://peaceful-cobbler-6780e6.netlify.app/game",


);


$desenvolvedores[2] = array(
    "id" => 2,
    "title" => "João Paulo",
    "description" => "Alunos de TADS",

    "linkGame" => "https://github.com/jpaulo-stk",
    "screenShot01" => "{$path}img/joao.jpg",
    "banner" => "{$path}img/jogos/joao.jpg",
    "criador" => "João Paulo",
    "linkSiteCriador" => "https://jpaulo-stk.github.io/Snake-Hungry/index.html"



);



$desenvolvedores[3] = array(
    "id" => 3,
    "title" => "Lieslei",
    "description" => "Alunos de TADS",

    "linkGame" => "https://github.com/navarropolski",
    "screenShot01" => "{$path}img/lieslei.jpg",
    "banner" => "{$path}img/lieslei.jpg",
    "criador" => "Lieslei",
    "linkSiteCriador" => "https://projeto-jogo-blush.vercel.app/index.html"

);



$desenvolvedores[4] = array(
    "id" => 4,
    "title" => "Eduardo Davanso",
    "description" => "Alunos de TADS",

    "linkGame" => "hhttps://eduardo-davanso.itch.io/scape-nave",
    "screenShot01" => "{$path}img/Eduardo.jpg",
    "banner" => "{$path}img/Eduardo.jpg",
    "criador" => "Riot Games",
    "linkSiteCriador" => "https://eduardo-davanso.itch.io/scape-nave",


);

echo json_encode($desenvolvedores);