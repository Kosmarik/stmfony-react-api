<?php

namespace ContainerLvQhrsW;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCrudResponseListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'EasyCorp\Bundle\EasyAdminBundle\EventListener\CrudResponseListener' shared service.
     *
     * @return \EasyCorp\Bundle\EasyAdminBundle\EventListener\CrudResponseListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/easycorp/easyadmin-bundle/src/EventListener/CrudResponseListener.php';

        return $container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\EventListener\\CrudResponseListener'] = new \EasyCorp\Bundle\EasyAdminBundle\EventListener\CrudResponseListener(($container->privates['EasyCorp\\Bundle\\EasyAdminBundle\\Provider\\AdminContextProvider'] ?? $container->getAdminContextProviderService()), ($container->services['twig'] ?? $container->getTwigService()));
    }
}
