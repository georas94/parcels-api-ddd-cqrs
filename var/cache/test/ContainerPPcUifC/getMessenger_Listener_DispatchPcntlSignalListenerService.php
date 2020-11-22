<?php

namespace ContainerPPcUifC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_Listener_DispatchPcntlSignalListenerService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'messenger.listener.dispatch_pcntl_signal_listener' shared service.
     *
     * @return \Symfony\Component\Messenger\EventListener\DispatchPcntlSignalListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/EventListener/DispatchPcntlSignalListener.php';

        return $container->privates['messenger.listener.dispatch_pcntl_signal_listener'] = new \Symfony\Component\Messenger\EventListener\DispatchPcntlSignalListener();
    }
}
