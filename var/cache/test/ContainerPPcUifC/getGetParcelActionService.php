<?php

namespace ContainerPPcUifC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGetParcelActionService extends App_KernelTestDebugContainer
{
    /**
     * Gets the public 'App\Core\Ports\Rest\Parcel\GetParcelAction' shared autowired service.
     *
     * @return \App\Core\Ports\Rest\Parcel\GetParcelAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/HandleTrait.php';
        include_once \dirname(__DIR__, 4).'/src/Core/Ports/Rest/Parcel/GetParcelAction.php';

        return $container->services['App\\Core\\Ports\\Rest\\Parcel\\GetParcelAction'] = new \App\Core\Ports\Rest\Parcel\GetParcelAction(($container->privates['query.bus'] ?? $container->load('getQuery_BusService')), ($container->services['.container.private.serializer'] ?? $container->load('get_Container_Private_SerializerService')));
    }
}
