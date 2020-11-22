<?php

namespace Container6xuKu0d;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_LnAf_GJService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.lnAf.gJ' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/src/Core/Application/Command/Parcels/CreateParcel/CreateParcelCommandHandler.php';
        include_once \dirname(__DIR__, 4).'/src/Core/Domain/Model/User/UserFetcherInterface.php';
        include_once \dirname(__DIR__, 4).'/src/Core/Infrastructure/Security/UserFetcher.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Authorization/AuthorizationCheckerInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/security-core/Security.php';

        return $container->privates['.messenger.handler_descriptor.lnAf.gJ'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \App\Core\Application\Command\Parcels\CreateParcel\CreateParcelCommandHandler(($container->privates['App\\Core\\Infrastructure\\Repository\\ParcelRepository'] ?? $container->load('getParcelRepositoryService')), new \App\Core\Infrastructure\Security\UserFetcher(new \Symfony\Component\Security\Core\Security(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'security.authorization_checker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', true],
            'security.token_storage' => ['services', 'security.token_storage', 'getSecurity_TokenStorageService', false],
        ], [
            'security.authorization_checker' => '?',
            'security.token_storage' => '?',
        ])))), []);
    }
}
