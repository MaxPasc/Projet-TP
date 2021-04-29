<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Routing\Annotation\Route;

class MailerController extends AbstractController
{
    // /**
    //  * @Route("/mailer", name="mailer")
    //  */
    // public function index(): Response
    // {
    //     return $this->render('mailer/index.html.twig', [
    //         'controller_name' => 'MailerController',
    //     ]);

// }

    /**
     * @Route("/email")
     */
    public function sendEmail(\Swift_Mailer $mailer): Response
    {
        $message = (new \Swift_Message('Hello Email'))
        ->setFrom('groupe3wf3@outlook.fr')
        ->setTo('birolini.herve@gmail.com')
        ->setBody('Message du courriel')
        // you can remove the following code if you don't define a text version for your emails
    ;

    $mailer->send($message);

        // ...
        return $this->render('mailer/index.html.twig', [
            'controller_name' => 'MailerController',
        ]);
    }
}
