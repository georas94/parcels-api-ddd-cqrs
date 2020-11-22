<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/api/login_check' => [
            [['_route' => 'login_check', '_controller' => 'App\\Core\\Ports\\Rest\\AuthToken\\CreateAuthTokenAction'], null, ['POST' => 0], null, false, false, null],
            [['_route' => 'api_login_check'], null, null, null, false, false, null],
        ],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/api/parcels/([^/]++)(*:28)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        28 => [
            [['_route' => 'api_get_parcel', '_controller' => 'App\\Core\\Ports\\Rest\\Parcel\\GetParcelAction'], ['trackingId'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
