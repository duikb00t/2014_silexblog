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

$app->get('contact', function(\Symfony\Component\HttpFoundation\Request $request) use ($app) {

    // Some default data for when the form is displayed the first time.

    $data = [
        'name' => 'Your name',
        'email' => 'Your email'
    ];

    $form = $app['form.factory']->createBuilder('form', $data)
        ->add('name')
        ->add('email')
        ->add('gender', 'choice', array(
            'choices' => array(1 => 'male', 2 => 'female'),
            'expanded' => true,
        ))
        ->getForm();

    $form->handleRequest($request);

    if($form->isValid()) {
        $data = $form->getData();

        // Do something with the data...

        // redirect somewhere
        return $app->redirect('contact');
    }
    return $app['twig']->render('contact.html.twig', array('form', $form->createView()));
});

/**
 * No page found? Throw an error...
$app->error(function (\Exception $e, $code) use ($app){
    return 'Sorry the requested page could not be found...';
});


 */