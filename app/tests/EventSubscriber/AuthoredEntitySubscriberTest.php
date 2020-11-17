<?php

namespace App\Tests\EventSubscriber;


use ApiPlatform\Core\EventListener\EventPriorities;
use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpKernel\Event\ViewEvent;
use App\EventSubscriber\AuthoredEntitySubscriber;

class AuthoredEntitySubscriberTest extends TestCase
{
    public function testConfiguration()
    {
        $result = AuthoredEntitySubscriber::getSubscribedEvents();

        $this->assertArrayHasKey(ViewEvent::class, $result);
        $this->assertEquals(
            ['getAuthenticatedUser', EventPriorities::PRE_WRITE],
            $result[ViewEvent::class]
        );
    }
}