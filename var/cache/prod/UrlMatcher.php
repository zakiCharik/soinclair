<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin/adherant' => [[['_route' => 'adherant_index', '_controller' => 'App\\Controller\\AdherantController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/adherant/import' => [[['_route' => 'adherant_import', '_controller' => 'App\\Controller\\AdherantController::import'], null, ['GET' => 0], null, false, false, null]],
        '/admin/adherant/importZip' => [[['_route' => 'adherant_importzip', '_controller' => 'App\\Controller\\AdherantController::importZip'], null, ['GET' => 0], null, false, false, null]],
        '/admin/adherant/new' => [[['_route' => 'adherant_new', '_controller' => 'App\\Controller\\AdherantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/adherant/upload-excel' => [[['_route' => 'upload-excel', '_controller' => 'App\\Controller\\AdherantController::xslx'], null, null, null, false, false, null]],
        '/admin/adherant/upload-zip' => [[['_route' => 'upload-zip', '_controller' => 'App\\Controller\\AdherantController::uploadZip'], null, null, null, false, false, null]],
        '/admin/employeur' => [[['_route' => 'employeur_index', '_controller' => 'App\\Controller\\EmployeurController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/employeur/new' => [[['_route' => 'employeur_new', '_controller' => 'App\\Controller\\EmployeurController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'home_page', '_controller' => 'App\\Controller\\HomeController::home'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/qui-sommes-nous-2' => [[['_route' => 'qui_sommesnous', '_controller' => 'App\\Controller\\HomeController::quisomme'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/nos-publications' => [[['_route' => 'nos_publications', '_controller' => 'App\\Controller\\HomeController::publications'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/services-soin-clair' => [[['_route' => 'services_soinclair', '_controller' => 'App\\Controller\\HomeController::services'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/resetpwd' => [[['_route' => 'resetpwd_soinclair', '_controller' => 'App\\Controller\\HomeController::resetpwd'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/admin' => [[['_route' => 'admin_page', '_controller' => 'App\\Controller\\HomeController::admin'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/espace-adherant' => [[['_route' => 'espace_adherant', '_controller' => 'App\\Controller\\HomeController::adherant'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/espace-adherant/profil' => [[['_route' => 'adherant_profil', '_controller' => 'App\\Controller\\HomeController::adherant_profil'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/espace-employeur' => [[['_route' => 'espace_employeur', '_controller' => 'App\\Controller\\HomeController::employeur'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/espace-partenaire' => [[['_route' => 'espace_partenaire', '_controller' => 'App\\Controller\\HomeController::partner'], null, ['GET' => 0, 'HEAD' => 1], null, false, false, null]],
        '/admin/partenaire' => [[['_route' => 'partenaire_index', '_controller' => 'App\\Controller\\PartenaireController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/partenaire/new' => [[['_route' => 'partenaire_new', '_controller' => 'App\\Controller\\PartenaireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/admin/service' => [[['_route' => 'service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/service/new' => [[['_route' => 'service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user' => [[['_route' => 'user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/user/new' => [[['_route' => 'user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/admin/(?'
                    .'|adherant/(?'
                        .'|(\\d+)(*:34)'
                        .'|(\\d+)/edit(*:51)'
                        .'|(\\d+)(*:63)'
                    .')'
                    .'|employeur/([^/]++)(?'
                        .'|(*:92)'
                        .'|/edit(*:104)'
                        .'|(*:112)'
                    .')'
                    .'|partenaire/([^/]++)(?'
                        .'|(*:143)'
                        .'|/edit(*:156)'
                        .'|(*:164)'
                    .')'
                    .'|service/([^/]++)(?'
                        .'|(*:192)'
                        .'|/edit(*:205)'
                        .'|(*:213)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:238)'
                        .'|/edit(*:251)'
                        .'|(*:259)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'adherant_show', '_controller' => 'App\\Controller\\AdherantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        51 => [[['_route' => 'adherant_edit', '_controller' => 'App\\Controller\\AdherantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        63 => [[['_route' => 'adherant_delete', '_controller' => 'App\\Controller\\AdherantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        92 => [[['_route' => 'employeur_show', '_controller' => 'App\\Controller\\EmployeurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        104 => [[['_route' => 'employeur_edit', '_controller' => 'App\\Controller\\EmployeurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        112 => [[['_route' => 'employeur_delete', '_controller' => 'App\\Controller\\EmployeurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        143 => [[['_route' => 'partenaire_show', '_controller' => 'App\\Controller\\PartenaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        156 => [[['_route' => 'partenaire_edit', '_controller' => 'App\\Controller\\PartenaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        164 => [[['_route' => 'partenaire_delete', '_controller' => 'App\\Controller\\PartenaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        192 => [[['_route' => 'service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        205 => [[['_route' => 'service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        213 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        238 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        251 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        259 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
