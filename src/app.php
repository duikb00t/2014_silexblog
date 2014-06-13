<?php
use Silex\Provider\HttpCacheServiceProvider;

$app->register(new \Silex\Provider\HttpCacheServiceProvider());

$app->register(new \Silex\Provider\FormServiceProvider());

$app->register(new Silex\Provider\TranslationServiceProvider(), array(
    'locale_fallbacks' => array('en'),
));

$app->register(new \Silex\Provider\TwigServiceProvider(), array(
   'twig.path'  =>  __DIR__.'/../resources/views',

));