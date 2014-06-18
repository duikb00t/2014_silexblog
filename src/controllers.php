<?php
/**
 * Setting up some basic routing.
 *
 */
$app->get('/', function() use($app) {
    return $app['twig']->render('home.html.twig', array());
});

$app->get('home', function() use($app) {
    return $app['twig']->render('home.html.twig', array());
});


$app->get('about', function() use ($app) {
    return $app['twig']->render('about.html.twig', array());
});

$app->get('contact', 'SilexBlog\Contact\ContactController::index' );


/**
 * No page found? Throw an error...
$app->error(function (\Exception $e, $code) use ($app){
    return 'Sorry the requested page could not be found...';
});


 */