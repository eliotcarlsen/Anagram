<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Anagram.php';

    session_start();

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
    ));

    $app->get('/', function() use($app){
        $array_of_words = array($_GET['word1'], ...)
        arrayChecker($array_of_words)
    });

    return $app;
?>
