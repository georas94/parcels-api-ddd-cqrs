<?php

namespace ContainerPPcUifC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_9ktM88IService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.9ktM88I' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';

        return $container->privates['.messenger.handler_descriptor.9ktM88I'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(($container->privates['App\\Core\\Application\\Command\\User\\CreateUser\\CreateUserCommandHandler'] ?? $container->load('getCreateUserCommandHandlerService')), []);
    }
}
