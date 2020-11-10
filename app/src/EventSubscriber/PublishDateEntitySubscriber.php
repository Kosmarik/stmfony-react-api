<?php
/**
 * Created by PhpStorm.
 * User: ivasko
 * Date: 2020-11-11
 * Time: 00:41
 */

namespace App\EventSubscriber;


use ApiPlatform\Core\EventListener\EventPriorities;
use App\Entity\PublishedDateEntityInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class PublishDateEntitySubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return [
            ViewEvent::class => ['setDatePublished', EventPriorities::PRE_WRITE]
        ];
    }

    public function setDatePublished(ViewEvent $event)
    {
        $entity = $event->getControllerResult();
        $method = $event->getRequest()->getMethod();

        if (!$entity instanceof PublishedDateEntityInterface || Request::METHOD_POST !== $method) {
            return;
        }

        $entity->setPublished(new \DateTime());
    }
}