<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/blog/add' => [[['_route' => 'blog_add', '_controller' => 'App\\Controller\\BlogController::add'], null, ['POST' => 0], null, false, false, null]],
        '/' => [[['_route' => 'default_index', '_controller' => 'App\\Controller\\DefaultController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/blog(?'
                    .'|(?:/(\\d+))?(*:61)'
                    .'|/post/(?'
                        .'|(\\d+)(*:82)'
                        .'|([^/]++)(?'
                            .'|(*:100)'
                            .'|(*:108)'
                        .')'
                    .')'
                .')'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:154)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:185)'
                        .'|contexts/(.+)(?:\\.([^/]++))?(*:221)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        61 => [[['_route' => 'blog_list', 'page' => 1, '_controller' => 'App\\Controller\\BlogController::blogList'], ['page'], null, null, false, true, null]],
        82 => [[['_route' => 'blog_by_id', '_controller' => 'App\\Controller\\BlogController::post'], ['id'], ['GET' => 0], null, false, true, null]],
        100 => [[['_route' => 'blog_by_slug', '_controller' => 'App\\Controller\\BlogController::postBySlug'], ['slug'], ['GET' => 0], null, false, true, null]],
        108 => [[['_route' => 'blog_delete', '_controller' => 'App\\Controller\\BlogController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        154 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        185 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        221 => [
            [['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
