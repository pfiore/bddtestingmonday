<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/TitleCaseGenerator.php";

    $app = new Silex\Application();

    $app['debug']=TRUE;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render("book_list.php");
    });

    $app->get("/create_book", function() use ($app) {
        $inputtitle = new TitleCaseGenerator;
        $CorrectTitle = $inputtitle->makeTitleCase($_GET['title']);
        return $app['twig']->render("create_book.php", array('newbook' => $CorrectTitle));
    });

    return $app;

?>
