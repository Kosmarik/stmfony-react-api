<?php
/**
 * Created by PhpStorm.
 * User: ivasko
 * Date: 2020-11-14
 * Time: 03:23
 */

namespace App\Email;


use App\Entity\User;
use Twig\Environment;

class Mailer
{
    private $mailer;
    private $twig;

    public function __construct(
        \Swift_Mailer $mailer,
         Environment $twig
    )
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    public function sendConfirmationEmail(User $user)
    {
        $body = $this->twig->render(
            'email/confirmation.html.twig',
            [
                'user' => $user
            ]
        );

        $message = (new \Swift_Message("Please confirm your account!"))
            ->setFrom("alfred.ivasko1996@gmail.com")
            ->setTo($user->getEmail())
            ->setBody($body, 'text/html');

        $this->mailer->send($message);

    }
}