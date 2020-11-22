<?php

namespace ContainerRzn4OgO;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_231fqAfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.231fqAf' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/src/Core/Application/Query/Parcel/GetParcel/GetParcelQueryHandler.php';

        return $container->privates['.messenger.handler_descriptor.231fqAf'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \App\Core\Application\Query\Parcel\GetParcel\GetParcelQueryHandler(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')), ($container->privates['App\\Core\\Infrastructure\\Repository\\ParcelRepository'] ?? $container->load('getParcelRepositoryService'))), []);
    }
}
