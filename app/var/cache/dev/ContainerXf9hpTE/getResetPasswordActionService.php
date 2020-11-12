<?php

namespace ContainerXf9hpTE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getResetPasswordActionService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ResetPasswordAction' shared autowired service.
     *
     * @return \App\Controller\ResetPasswordAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Controller/ResetPasswordAction.php';

        return $container->services['App\\Controller\\ResetPasswordAction'] = new \App\Controller\ResetPasswordAction(($container->privates['api_platform.validator'] ?? $container->load('getApiPlatform_ValidatorService')), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), ($container->services['lexik_jwt_authentication.jwt_manager'] ?? $container->load('getLexikJwtAuthentication_JwtManagerService')));
    }
}
