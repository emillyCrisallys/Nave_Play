<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json; charset=utf-8");


$path = "http://localhost/Nave_Play/";



$game[1] = array(
    "id" => 1,
    "title" => "Fortnite",
    "description" => "Fortnite é um dos jogos recomendados para PC e para consoles com maior popularidade. Ele foi responsável pela popularização do gênero nos últimos anos.",

    "linkGame" => "https://www.fortnite.com/download",
    "screenShot01" => "{$path}img/fortinite.jpg",
    "banner" => "{$path}img/fortinite_2.jpg",
    "criador" => " Epic Games",
    "linkSiteCriador" => "https://www.fortnite.com/",


);


$game[2] = array(
    "id" => 2,
    "title" => "Baldurs Gate 3",
    "description" => "Esse RPG de mundo aberto ao estilo Dungeons & Dragons foi lançado em 2023 e já conquistou uma legião de fãs. Baldur's Gate 3 conta com combate por turnos e um modo multiplayer, limitado a quatro participantes.",

    "linkGame" => "https://bloodinbaldursgate.larian.com/",
    "screenShot01" => "{$path}img/baldur.jpg",
    "banner" => "{$path}img/baldurs_2.jpg",
    "criador" => "Larian Studios",
    "linkSiteCriador" => "https://baldursgate3.game/"


);



$game[3] = array(
    "id" => 3,
    "title" => "Horizon Forbidden West",
    "description" => "A sequência do aclamado Horizon Zero Dawn não deixou a desejar. Nesse jogo de mundo aberto você pode explorar terras distantes, enfrentar máquinas grandes e imponentes e conhecer novas tribos do futuro distante e pós-apocalíptico de Horizon.",

    "linkGame" => "https://store.epicgames.com/pt-BR/p/horizon-forbidden-west-complete-edition",
    "screenShot01" => "{$path}img/horizon.jpg",
    "banner" => "{$path}img/horixo_2.jpg",
    "criador" => "Guerrilla Games",
    "linkSiteCriador" => "https://store.steampowered.com/agecheck/app/2420110/"

);



$game[4] = array(
    "id" => 4,
    "title" => "Super Mario",
    "description" => "Mario é retratado como um encanador italiano baixinho rechonchudo e bigodudo vindo do Brooklyn que reside no Reino dos Cogumelos. Ele repetidamente tem a missão de resgatar a Princesa Peach do vilão Bowser, e impedir seus diversos planos de destruir e dominar o reino.",

    "linkGame" => "https://www.nintendo.com/pt-br/store/products/mario-plus-rabbids-sparks-of-hope-switch/",
    "screenShot01" => "{$path}img/logo_mario.jpg",
    "banner" => "{$path}img/mario2.jpg",
    "criador" => "Riot Games",
    "linkSiteCriador" => "https://www.nintendo.com/",


);

$game[5] = array(
    "id" => 5,
    "title" => "Valorant",
    "description" => "Valorant ocorre em uma versão de uma Terra em um futuro próximo após um evento conhecido como Primeira luz. Este evento abrange todo o globo, levando a grandes transformações na vida, na tecnologia e na forma como os governos operam. No entanto, algumas pessoas em todo o mundo começam a ganhar habilidades decorrentes deste grande evento. Esses indivíduos talentosos são chamados Radiantes.
                      Em resposta à Primeira Luz, uma organização das sombras funda o Protocolo Valorant, que une Agentes de todo o mundo. Esses Agentes consistem em Radiants e outros indivíduos equipados com a tecnologia Radiant. Devido às histórias de fundo desses personagens, a equipe Valorant apresenta uma dinâmica interessante, já que os indivíduos não só às vezes se conhecem, mas também vêm de um amplo espectro de origens que vão do crime ao militar.",

    "linkGame" => "https://authenticate.riotgames.com/",
    "screenShot01" => "{$path}img/logo_valorant.jpg",
    "banner" => "{$path}img/valorant.jpg",
    "criador" => "Riot Games",
    "linkSiteCriador" => "https://playvalorant.com/pt-br/news/announcements/beginners-guide/",


);




$game[6] = array(
    "id" => 6,
    "title" => "Palworld",
    "description" => "Palworld chegou a ser chamado de Pokémon com armas, sendo um sucesso de vendas, com 3 milhões de cópias comercializadas apenas alguns dias após seu lançamento.",

    "linkGame" => "https://store.steampowered.com/app/1623730/Palworld/",
    "screenShot01" => "{$path}img/palworld.jpg",
    "banner" => "{$path}img/palworld_2.jpg",
    "criador" => "Pocket Pair",
    "linkSiteCriador" => "hhttps://www.pocketpair.jp/palworld",


);

$game[7] = array(
    "id" => 7,
    "title" => "Alan Wake 2",
    "description" => "Continuação do sucesso Alan Wake, de 2010, trazendo de volta o protagonista Alan, além de novos personagens como os agentes do FBI Saga Anderson e Alex Casey.",

    "linkGame" => "https://www.alanwake.com/pt/compre-ja-alan-wake-2/#/search&retail_type=digital",
    "screenShot01" => "{$path}img/AlanII.jpg",
    "banner" => "{$path}img/AlanII_2",
    "criador" => "Remedy Entertainment",
    "linkSiteCriador" => "https://www.alanwake.com/pt/",


);


$game[8] = array(
    "id" => 8,
    "title" => "Resident Evil 4",
    "description" => "Resident Evil 4 é um remake do original de 2005. Ele busca preservar a essência do jogo original ao mesmo tempo em que traz uma jogabilidade modernizada, enredo reimaginado e gráficos mais detalhados.",

    "linkGame" => "https://store.steampowered.com/agecheck/app/2050650/",
    "screenShot01" => "{$path}img/resident.jpg",
    "banner" => "{$path}img/resident_2.jpn",
    "criador" => "Capcom",
    "linkSiteCriador" => "https://www.residentevil.com/re4/pt-br/",


);

$game[9] = array(
    "id" => 9,
    "title" => "Helldivers 2",
    "description" => "Helldivers 2 é um jogo de tiro em terceira pessoa baseado em equipes, nele, as forças de elite Helldivers buscam a vitória num confronto intergaláctico contra a proliferação de ameaças alienígenas.",

    "linkGame" => "https://store.steampowered.com/agecheck/app/553850/?l=brazilian",
    "screenShot01" => "{$path}img/Helldivers.jpg",
    "banner" => "{$path}img/Helldivers_2.jpg",
    "criador" => "Arrowhead Game Studios",
    "linkSiteCriador" => "https://www.nuuvem.com/br-pt/item/helldivers-2",


);


echo json_encode($game);
