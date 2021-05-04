<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
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
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|adherant/(?'
                        .'|(\\d+)(*:196)'
                        .'|(\\d+)/edit(*:214)'
                        .'|(\\d+)(*:227)'
                    .')'
                    .'|employeur/([^/]++)(?'
                        .'|(*:257)'
                        .'|/edit(*:270)'
                        .'|(*:278)'
                    .')'
                    .'|partenaire/([^/]++)(?'
                        .'|(*:309)'
                        .'|/edit(*:322)'
                        .'|(*:330)'
                    .')'
                    .'|service/([^/]++)(?'
                        .'|(*:358)'
                        .'|/edit(*:371)'
                        .'|(*:379)'
                    .')'
                    .'|user/([^/]++)(?'
                        .'|(*:404)'
                        .'|/edit(*:417)'
                        .'|(*:425)'
                    .')'
                .')'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        196 => [[['_route' => 'adherant_show', '_controller' => 'App\\Controller\\AdherantController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        214 => [[['_route' => 'adherant_edit', '_controller' => 'App\\Controller\\AdherantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        227 => [[['_route' => 'adherant_delete', '_controller' => 'App\\Controller\\AdherantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        257 => [[['_route' => 'employeur_show', '_controller' => 'App\\Controller\\EmployeurController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        270 => [[['_route' => 'employeur_edit', '_controller' => 'App\\Controller\\EmployeurController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        278 => [[['_route' => 'employeur_delete', '_controller' => 'App\\Controller\\EmployeurController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        309 => [[['_route' => 'partenaire_show', '_controller' => 'App\\Controller\\PartenaireController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        322 => [[['_route' => 'partenaire_edit', '_controller' => 'App\\Controller\\PartenaireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        330 => [[['_route' => 'partenaire_delete', '_controller' => 'App\\Controller\\PartenaireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        358 => [[['_route' => 'service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        371 => [[['_route' => 'service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        379 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        404 => [[['_route' => 'user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        417 => [[['_route' => 'user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        425 => [
            [['_route' => 'user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
