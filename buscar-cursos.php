<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['verify' => false]);
$resposta = $client->request('GET', "https://www.alura.com.br/cursos-online-programacao/php");

$html = $resposta->getBody();
$crawler = new Crawler();
$crawler->addHtmlContent($html);

//ou
//$crawler = new Crawler($html);

$cursos = $crawler->filter('span.card-curso__nome');


foreach ($cursos as $item) {
    echo $item->textContent . PHP_EOL;
}