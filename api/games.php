<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");


$path = "http://localhost/TechAcademy_2_ajuste/";

$game[1] = array(
    "id" => 1,
    "title" => "SNAKE",
    "description" => "O classico jogo SNAKE, aonde seu principal objetivo é comer maçãs para aumentar seu tamanho e ficar cada vez mais rapido, dando uma dinamica unica, sensacional e muito classica",

    "linkGame" => "{$path}img/jogos/Jogo01/Snake/index.html",
    "screenShot01" => "{$path}img/jogos/jogo01.jpg",
    "banner" => "{$path}img/jogos/jogo01_banner.jpg",
    "criador" => "João Paulo",
    "linkSiteCriador" => "https://jpaulo-stk.github.io/Snake-Hungry/index.html"

);
$game[2] = array(
    "id" => 2,
    "title" => "Dark Legacy",
    "description" => "Há séculos, um poderoso necromante, conhecido como a Lord Mhaldazzar, governava a região de Valáquia com punho de ferro. No entanto, um grupo de caçadores destemidos liderados pelo lendário Richard Valencourt, conseguiram derrotá-lo e selá-lo em um sono eterno. Por décadas, a região viveu em paz, mas recentemente, rumores de que o selo que mantinha o necromante adormecido estava enfraquecendo e começou a se romper. Em meio ao caos, criaturas das trevas emergiram dos locais mais sombrios da terra, ameaçando mergulhar o mundo na escuridão novamente.",

    "linkGame" => "{$path}img/jogos/Jogo02/LabFy Gize 1/index.html",
    "screenShot01" => "{$path}img/jogos/jogo02.jpg",
    "banner" => "{$path}img/jogos/jogo02_banner.jpg",
    "criador" => "Lieslei",
    "linkSiteCriador" => "https://projeto-jogo-blush.vercel.app/index.html"


);

$game[3] = array(
    "id" => 3,
    "title" => "LabFay Gize",
    "description" => "LabFy Gize é um jogo de caça ao tesouro, onde o jogador precisa encontrar alguns amuletos para conseguir chegar até o tesouro. Jony um desbravador que estava em uma expedição pelo Egito, em busca do tesouro de Necrópole de Saqqura escondido em um outro mundo que existe abaixo das pirâmides de Gize, quando acaba preso em um labirinto de com objetos mortais que dificultam sua caça ao tesouro.Jonny terá que passar por dois níveis até chegar ao tesouro, deve pegar os diamantes para complementar sua fortuna",

    "linkGame" => "{$path}img/jogos/Jogo03/DarkLegacy/index.html",
    "screenShot01" => "{$path}img/jogos/jogo03.jpg",
    "banner" => "{$path}img/jogos/jogo03_banner.jpg",
    "criador" => "Emilly Crisallys",
    "linkSiteCriador" => "https://peaceful-cobbler-6780e6.netlify.app/game",


);


echo json_encode($game);
