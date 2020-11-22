<?php

namespace Container6xuKu0d;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getQuery_BusService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'query.bus' shared service.
     *
     * @return \Symfony\Component\Messenger\MessageBus
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/MessageBusInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/MessageBus.php';

        return $container->privates['query.bus'] = new \Symfony\Component\Messenger\MessageBus(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['query.bus.middleware.traceable'] ?? $container->load('getQuery_Bus_Middleware_TraceableService'));
            yield 1 => ($container->privates['query.bus.middleware.add_bus_name_stamp_middleware'] ?? ($container->privates['query.bus.middleware.add_bus_name_stamp_middleware'] = new \Symfony\Component\Messenger\Middleware\AddBusNameStampMiddleware('query.bus')));
            yield 2 => ($container->privates['messenger.middleware.reject_redelivered_message_middleware'] ?? ($container->privates['messenger.middleware.reject_redelivered_message_middleware'] = new \Symfony\Component\Messenger\Middleware\RejectRedeliveredMessageMiddleware()));
            yield 3 => ($container->privates['messenger.middleware.dispatch_after_current_bus'] ?? ($container->privates['messenger.middleware.dispatch_after_current_bus'] = new \Symfony\Component\Messenger\Middleware\DispatchAfterCurrentBusMiddleware()));
            yield 4 => ($container->privates['messenger.middleware.failed_message_processing_middleware'] ?? ($container->privates['messenger.middleware.failed_message_processing_middleware'] = new \Symfony\Component\Messenger\Middleware\FailedMessageProcessingMiddleware()));
            yield 5 => ($container->privates['messenger.middleware.send_message'] ?? $container->load('getMessenger_Middleware_SendMessageService'));
            yield 6 => ($container->privates['query.bus.middleware.handle_message'] ?? $container->load('getQuery_Bus_Middleware_HandleMessageService'));
        }, 7));
    }
}