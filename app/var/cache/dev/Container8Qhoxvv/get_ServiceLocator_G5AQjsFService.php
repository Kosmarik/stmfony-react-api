<?php

namespace Container8Qhoxvv;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_G5AQjsFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G5AQjsF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G5AQjsF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'post' => ['privates', '.errored..service_locator.G5AQjsF.App\\Entity\\BlogPost', NULL, 'Cannot autowire service ".service_locator.G5AQjsF": it references class "App\\Entity\\BlogPost" but no such service exists.'],
        ], [
            'post' => 'App\\Entity\\BlogPost',
        ]);
    }
}
