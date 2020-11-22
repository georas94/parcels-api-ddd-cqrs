<?php

namespace ContainerV7c7yfD;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTranslator_Formatter_DefaultService extends App_KernelTestDebugContainer
{
    /**
     * Gets the private 'translator.formatter.default' shared service.
     *
     * @return \Symfony\Component\Translation\Formatter\MessageFormatter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/IntlFormatterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/Formatter/MessageFormatter.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/LocaleAwareInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation-contracts/TranslatorTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/translation/IdentityTranslator.php';

        return $container->privates['translator.formatter.default'] = new \Symfony\Component\Translation\Formatter\MessageFormatter(($container->privates['identity_translator'] ?? ($container->privates['identity_translator'] = new \Symfony\Component\Translation\IdentityTranslator())));
    }
}
