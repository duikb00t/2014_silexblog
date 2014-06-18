<?php
/**
 * Created by PhpStorm.
 * User: Duikb00t
 * Date: 18/06/14
 * Time: 16:26
 */

namespace SilexBlog\Contact;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class ContactController {

    public function index(Request $request, Application $app) {

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

        return $app['twig']->render('contact.html.twig', array('form' => $form->createView()));
    }

} 