<?php

namespace ContainerV7c7yfD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getParcelRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Core\Infrastructure\Repository\ParcelRepository' shared autowired service.
     *
     * @return \App\Core\Infrastructure\Repository\ParcelRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Core/Domain/Model/Parcel/ParcelRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Core/Infrastructure/Repository/ParcelRepository.php';

        return $container->privates['App\\Core\\Infrastructure\\Repository\\ParcelRepository'] = new \App\Core\Infrastructure\Repository\ParcelRepository(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}
