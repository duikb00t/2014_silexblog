<?php
$app->match('/', function(\Symfony\Component\HttpFoundation\Request $request) use ($app){

    /* Load the main template file. */
    return $app['twig']->render('home.html.twig', array());

})->bind('home');

$app->error(function (\Exception $e, $code) use ($app){
   return 'Sorry the requested page could not be found...';
});


$app->get('home', function() use ($app){
    return $app['twig']->render('home.html.twig', array());
});