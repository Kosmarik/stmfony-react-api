<?php
/**
 * Created by PhpStorm.
 * User: ivasko
 * Date: 2020-11-13
 * Time: 15:15
 */

namespace App\EventSubscriber;


use ApiPlatform\Core\EventListener\EventPriorities;
use App\Entity\UserConfirmation;
use App\Security\UserConfirmationService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpKernel\Event\ViewEvent;

class UserConfirmationSubscriber implements EventSubscriberInterface
{
    private $userConfirmationService;

    public function __construct(UserConfirmationService $userConfirmationService)
    {
        $this->userConfirmationService = $userConfirmationService;
    }

    public static function getSubscribedEvents()
    {
        return [
            ViewEvent::class => ['confirmUser', EventPriorities::POST_VALIDATE]
        ];
    }

    public function confirmUser(ViewEvent $event)
    {
        $request = $event->getRequest();

        if ('api_user_confirmations_post_collection' !== $request->get('_route')) {
            return;
        }

        /** @var UserConfirmation $confirmationToken */
        $confirmationToken = $event->getControllerResult();

        $this->userConfirmationService->confirmUser(
            $confirmationToken->confirmationToken
        );

        $event->setResponse(new JsonResponse(null, \Symfony\Component\HttpFoundation\Response::HTTP_OK));
    }
}