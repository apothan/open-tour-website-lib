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
        '/Admin' => [[['_route' => 'ot_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'ot_home', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/Admin/AddTour' => [[['_route' => 'ot_admin_addtour', '_controller' => 'App\\Controller\\TourController::addTour'], null, null, null, false, false, null]],
        '/Admin/CreateTour' => [[['_route' => 'ot_admin_createtour', '_controller' => 'App\\Controller\\TourController::createTour'], null, null, null, false, false, null]],
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
                .'|/Tour/([^/]++)(*:183)'
                .'|/Admin/(?'
                    .'|EditTour/([^/]++)(*:218)'
                    .'|UpdateTour/([^/]++)(*:245)'
                    .'|Tour(?'
                        .'|Categories/([^/]++)(*:279)'
                        .'|Sell(?'
                            .'|s/([^/]++)(*:304)'
                            .'|Add/([^/]++)(*:324)'
                        .')'
                        .'|Itinerary/([^/]++)(*:351)'
                        .'|Features/([^/]++)(*:376)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        183 => [[['_route' => 'ot_tour', '_controller' => 'App\\Controller\\DefaultController::tour'], ['id'], null, null, false, true, null]],
        218 => [[['_route' => 'ot_admin_edittour', '_controller' => 'App\\Controller\\TourController::editTour'], ['id'], null, null, false, true, null]],
        245 => [[['_route' => 'ot_admin_updatetour', '_controller' => 'App\\Controller\\TourController::updateTour'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'ot_admin_tourcategories', '_controller' => 'App\\Controller\\TourController::tourCategories'], ['id'], null, null, false, true, null]],
        304 => [[['_route' => 'ot_admin_toursells', '_controller' => 'App\\Controller\\TourController::tourSells'], ['id'], null, null, false, true, null]],
        324 => [[['_route' => 'ot_admin_tourselladd', '_controller' => 'App\\Controller\\TourController::tourSellAdd'], ['id'], null, null, false, true, null]],
        351 => [[['_route' => 'ot_admin_touritinerary', '_controller' => 'App\\Controller\\TourController::tourItinerary'], ['id'], null, null, false, true, null]],
        376 => [
            [['_route' => 'ot_admin_tourfeatures', '_controller' => 'App\\Controller\\TourController::tourFeatures'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
