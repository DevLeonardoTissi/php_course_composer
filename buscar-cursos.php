<?php

require 'vendor/autoload.php';


use GuzzleHttp\Client;
use Leonardo\BuscadorDeCursos\Buscador;
use Symfony\Component\DomCrawler\Crawler;

//Testes para arquivos separados no autoload
exibeMensagem("Oi");
Teste::teste();



$client = new Client(['verify' => false, 'base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();


$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('cursos-online-programacao/php');


foreach ($cursos as $item) {
    echo $item . PHP_EOL;
}

