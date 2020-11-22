<?php

namespace ContainerV7c7yfD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserRepositoryService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Core\Infrastructure\Repository\UserRepository' shared autowired service.
     *
     * @return \App\Core\Infrastructure\Repository\UserRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Core/Domain/Model/User/UserRepositoryInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Core/Infrastructure/Repository/UserRepository.php';

        return $container->privates['App\\Core\\Infrastructure\\Repository\\UserRepository'] = new \App\Core\Infrastructure\Repository\UserRepository(($container->services['doctrine.orm.default_entity_manager'] ?? $container->load('getDoctrine_Orm_DefaultEntityManagerService')));
    }
}