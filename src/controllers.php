<?php
/**
 * Setting up some basic routing.
 *
 */
$app->get('/home', function() use($app) {

   return $app['twig']->render('home.html.twig', array());
});


/**
 * No page found? Throw an error...
 */
$app->error(function (\Exception $e, $code) use ($app){
    return 'Sorry the requested page could not be found...';
});

