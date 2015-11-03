<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

// Hello World
$app->get('/hello/:name', function ($name) {
    $inteiro1 = 42; // tipo integer
    $inteiro2 = 79; // tipo integer
    $texto = "Ola, "; // tipo string
    $fracao = 2.3; // tipo float
    
    $soma = $inteiro1 + $inteiro2;
    $divisao = $inteiro1 / $fracao;
    $multi = $inteiro2 * $fracao;
    
    $olamundo = $texto . $name;
    
    echo "<P>Soma: " . $soma . "</p>";
    echo "<P>Divisao: " . $divisao . "</p>";
    echo "<P>Multiplica: " . $multi . "</p>";
    echo "<P>" . $olamundo . "</p>";
    
    });
    
    $app->run();