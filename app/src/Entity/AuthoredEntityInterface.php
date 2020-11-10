<?php
/**
 * Created by PhpStorm.
 * User: ivasko
 * Date: 2020-11-10
 * Time: 23:52
 */

namespace App\Entity;


use Symfony\Component\Security\Core\User\UserInterface;

interface AuthoredEntityInterface
{
    public function setAuthor(UserInterface $user): AuthoredEntityInterface;
}