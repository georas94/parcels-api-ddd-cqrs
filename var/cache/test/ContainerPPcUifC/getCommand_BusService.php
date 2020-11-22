<?php

namespace ContainerPPcUifC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCommand_BusService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'command.bus' shared service.
     *
     * @return \Symfony\Component\Messenger\MessageBus
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/MessageBusInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/MessageBus.php';

        return $container->privates['command.bus'] = new \Symfony\Component\Messenger\MessageBus(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['command.bus.middleware.traceable'] ?? $container->load('getCommand_Bus_Middleware_TraceableService'));
            yield 1 => ($container->privates['command.bus.middleware.add_bus_name_stamp_middleware'] ?? ($container->privates['command.bus.middleware.add_bus_name_stamp_middleware'] = new \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware('command.bus')));
            yield 2 => ($container->privates['messenger.middleware.reject_redelivered_message_middleware'] ?? ($container->privates['messenger.middleware.reject_redelivered_message_middleware'] = new \Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware()));
            yield 3 => ($container->privates['messenger.middleware.dispatch_after_current_bus'] ?? ($container->privates['messenger.middleware.dispatch_after_current_bus'] = new \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware()));
            yield 4 => ($container->privates['messenger.middleware.failed_message_processing_middleware'] ?? ($container->privates['messenger.middleware.failed_message_processing_middleware'] = new \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware()));
            yield 5 => ($container->privates['command.bus.middleware.doctrine_transaction'] ?? $container->load('getCommand_Bus_Middleware_DoctrineTransactionService'));
            yield 6 => ($container->privates['messenger.middleware.send_message'] ?? $container->load('getMessenger_Middleware_SendMessageService'));
            yield 7 => ($container->privates['command.bus.middleware.handle_message'] ?? $container->load('getCommand_Bus_Middleware_HandleMessageService'));
        }, 8));
    }
}
