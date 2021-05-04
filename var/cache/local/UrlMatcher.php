<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home_page', '_controller' => 'App\\Controller\\HomeController::home'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/espace-adherant' => [[['_route' => 'espace_adherant', '_controller' => 'App\\Controller\\HomeController::adherant'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/espace-employeur' => [[['_route' => 'espace_employeur', '_controller' => 'App\\Controller\\HomeController::employeur'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/espace-partenaire' => [[['_route' => 'espace_partenaire', '_controller' => 'App\\Controller\\HomeController::partner'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
    ],
    [ // $regexpList
    ],
    [ // $dynamicRoutes
    ],
    null, // $checkCondition
];
