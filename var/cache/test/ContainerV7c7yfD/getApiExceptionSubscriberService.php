<?php

namespace ContainerV7c7yfD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiExceptionSubscriberService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'App\Shared\Infrastructure\Http\ApiExceptionSubscriber' shared autowired service.
     *
     * @return \App\Shared\Infrastructure\Http\ApiExceptionSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Shared/Infrastructure/Http/ApiExceptionSubscriber.php';

        return $container->privates['App\\Shared\\Infrastructure\\Http\\ApiExceptionSubscriber'] = new \App\Shared\Infrastructure\Http\ApiExceptionSubscriber();
    }
}
