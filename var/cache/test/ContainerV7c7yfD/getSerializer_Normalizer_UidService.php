<?php

namespace ContainerV7c7yfD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSerializer_Normalizer_UidService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'serializer.normalizer.uid' shared service.
     *
     * @return \Symfony\Component\Serializer\Normalizer\UidNormalizer
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/NormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/DenormalizerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/CacheableSupportsMethodInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/serializer/Normalizer/UidNormalizer.php';

        return $container->privates['serializer.normalizer.uid'] = new \Symfony\Component\Serializer\Normalizer\UidNormalizer();
    }
}
