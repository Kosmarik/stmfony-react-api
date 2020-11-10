<?php
/**
 * Created by PhpStorm.
 * User: ivasko
 * Date: 2020-11-10
 * Time: 23:58
 */

namespace App\Entity;


interface PublishedDateEntityInterface
{
    public function setPublished(\DateTimeInterface $published): PublishedDateEntityInterface;
}