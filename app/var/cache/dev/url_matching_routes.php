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
        '/api/login_check' => [[['_route' => 'api_login_check'], null, ['POST' => 0], null, false, false, null]],
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
                        .'|co(?'
                            .'|ntexts/(.+)(?:\\.([^/]++))?(*:224)'
                            .'|mments(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:259)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:297)'
                                .')'
                            .')'
                        .')'
                        .'|blog_posts(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:339)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:380)'
                                .')'
                                .'|([^/]++)/comments(?:\\.([^/]++))?(*:421)'
                            .')'
                        .')'
                        .'|users(?'
                            .'|(?:\\.([^/]++))?(*:454)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:491)'
                            .')'
                        .')'
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
        224 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        259 => [
            [['_route' => 'api_comments_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comments_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        297 => [
            [['_route' => 'api_comments_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comments_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        339 => [
            [['_route' => 'api_blog_posts_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BlogPost', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_blog_posts_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BlogPost', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        380 => [
            [['_route' => 'api_blog_posts_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BlogPost', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_blog_posts_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BlogPost', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        421 => [[['_route' => 'api_blog_posts_comments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_subresource_operation_name' => 'api_blog_posts_comments_get_subresource', '_api_subresource_context' => ['property' => 'comments', 'identifiers' => [['id', 'App\\Entity\\BlogPost', true]], 'collection' => true, 'operationId' => 'api_blog_posts_comments_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        454 => [[['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null]],
        491 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
