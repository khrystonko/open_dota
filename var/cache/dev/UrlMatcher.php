<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/heroes' => [[['_route' => 'app_hero_index', '_controller' => 'App\\Controller\\HeroController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/heroes/([^/]++)/matches(*:66)'
                .'|/matches/([^/]++)(*:90)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        66 => [[['_route' => 'app_hero_match_index', '_controller' => 'App\\Controller\\Hero\\MatchController::index'], ['id'], null, null, false, false, null]],
        90 => [
            [['_route' => 'app_hero_match_show', '_controller' => 'App\\Controller\\Hero\\MatchController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
