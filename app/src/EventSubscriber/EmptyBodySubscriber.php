<?php
/**
 * Created by PhpStorm.
 * User: ivasko
 * Date: 2020-11-16
 * Time: 23:40
 */

namespace App\EventSubscriber;


use ApiPlatform\Core\EventListener\EventPriorities;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use App\Exception\EmptyBodyException;

class EmptyBodySubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::EXCEPTION => ['handleEmptyBody', EventPriorities::POST_DESERIALIZE]
        ];
    }

    public function handleEmptyBody(ExceptionEvent $event)
    {
        $request = $event->getRequest();
        $method = $request->getMethod();
        $route = $request->get('_route');

        if (!in_array($method, [Request::METHOD_POST, Request::METHOD_PUT]) ||
            in_array($request->getContentType(), ['html', 'form']) ||
            substr($route, 0, 3) !== 'api'
        ) {
            return;
        }

        $data = $event->getRequest()->get('data');

        if (null === $data) {
            throw new EmptyBodyException();
        }
    }
}