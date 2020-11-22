<?php

namespace ContainerPPcUifC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSecurity_Firewall_Map_Context_LoginService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'security.firewall.map.context.login' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallContext
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';

        return $container->privates['security.firewall.map.context.login'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['security.channel_listener'] ?? $container->load('getSecurity_ChannelListenerService'));
            yield 1 => ($container->privates['security.authentication.listener.json.login'] ?? $container->load('getSecurity_Authentication_Listener_Json_LoginService'));
            yield 2 => ($container->privates['security.authentication.listener.anonymous.login'] ?? $container->load('getSecurity_Authentication_Listener_Anonymous_LoginService'));
            yield 3 => ($container->privates['security.access_listener'] ?? $container->load('getSecurity_AccessListenerService'));
        }, 4), ($container->privates['security.exception_listener.login'] ?? $container->load('getSecurity_ExceptionListener_LoginService')), NULL, ($container->privates['security.firewall.map.config.login'] ?? $container->load('getSecurity_Firewall_Map_Config_LoginService')));
    }
}
