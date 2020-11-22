<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\DependencyInjection\Loader\Configurator;

use Symfony\Component\RateLimiter\Limiter;

return static function (ContainerConfigurator $container) {
    $container->services()
        ->set('limiter', Limiter::class)
            ->abstract()
            ->args([
                abstract_arg('config'),
                abstract_arg('storage'),
            ])
    ;
};
