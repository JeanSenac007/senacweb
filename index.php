<?php
require 'vendor/autoload.php';

$app = new \Slim\Slim();

// Hello World
/*$app->get('/hello/:name', function ($name) {
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
    
});*/

$app->get('/', function() use($app) {
    $app->view->setData(array(
        'title' => 'Página Principal',
        'page' => 'page/home',
        ));
        
        $app->render('layout.php');
});

$app->get('/about', function() use($app) {
    $app->view->setData(array(
        'title' => 'Página Sobre',
        'page' => 'page/about',
        ));
        
        $app->render('layout.php');
});

$app->get('/hancock', function() use($app) {
    $app->view->setData(array(
        'title' => 'Hancock',
        'page' => 'page/hancock',
        ));
        
        $app->render('layout.php');
});

$app->get('/amortedodemonio', function() use($app) {
    $app->view->setData(array(
        'title' => 'A Morte do Demonio',
        'page' => 'page/amortedodemonio',
        ));
        
        $app->render('layout.php');
});

$app->get('/clubedaluta', function() use($app) {
    $app->view->setData(array(
        'title' => 'Clube da Luta',
        'page' => 'page/clubedaluta',
        ));
        
        $app->render('layout.php');
});

$app->get('/index', function() use($app) {
    $app->view->setData(array(
        'title' => 'A Lagoa Azul',
        'page' => 'page/index',
        ));
        
        $app->render('layout.php');
});

$app->get('/list', function() use($app) {
    $app->view->setData(array(
        'title' => 'Pagina Lista',
        'page' => 'page/list',
        ));
        
        $app->render('layout.php');
});
    $app->run();