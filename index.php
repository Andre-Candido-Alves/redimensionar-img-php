<?php

require __DIR__ . '/vendor/autoload.php';

//https://www.youtube.com/watch?v=h5bDvjQdD0Q

use \App\Image\Resize;

$obResize = new Resize('a-paisagem-bonita-do-sol-da-praia-com-um-barco_1112-212.jpg');

$obResize->resize(500);

// $obResize->print();

$obResize->save(__DIR__.'/img/nova-imagem.jpg',100);

// echo "<pre>";
// print_r($obResize);
// echo "</pre>";