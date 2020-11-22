<?php

namespace Container6xuKu0d;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_9ktM88IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.9ktM88I' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/src/Core/Application/Command/User/CreateUser/CreateUserCommandHandler.php';

        return $container->privates['.messenger.handler_descriptor.9ktM88I'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \App\Core\Application\Command\User\CreateUser\CreateUserCommandHandler(($container->privates['security.encoder_factory.generic'] ?? $container->load('getSecurity_EncoderFactory_GenericService')), ($container->privates['App\\Core\\Infrastructure\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService'))), []);
    }
}
