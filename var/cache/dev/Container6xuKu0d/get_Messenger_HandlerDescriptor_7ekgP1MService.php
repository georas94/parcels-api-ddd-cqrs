<?php

namespace Container6xuKu0d;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_7ekgP1MService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.7ekgP1M' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/src/Core/Application/Command/AuthToken/CreateAuthToken/CreateAuthTokenCommandHandler.php';

        return $container->privates['.messenger.handler_descriptor.7ekgP1M'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \App\Core\Application\Command\AuthToken\CreateAuthToken\CreateAuthTokenCommandHandler(($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), ($container->privates['App\\Core\\Infrastructure\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')), ($container->services['lexik_jwt_authentication.jwt_manager'] ?? $container->load('getLexikJwtAuthentication_JwtManagerService'))), []);
    }
}
