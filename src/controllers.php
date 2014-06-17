<?php

$app->match('/', function(\Symfony\Component\HttpFoundation\Request $request) use ($app){

    // Render the page.
    return $app['twig']->render('layout.html.twig');

});