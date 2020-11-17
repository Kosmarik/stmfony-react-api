<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'security_login', '_controller' => 'App\\Controller\\AdminSecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'security_logout', '_controller' => 'App\\Controller\\AdminSecurityController::logout'], null, null, null, false, false, null]],
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
                .'|/confirm\\-user/([^/]++)(*:142)'
                .'|/api(?'
                    .'|(?:/(index)(?:\\.([^/]++))?)?(*:185)'
                    .'|/(?'
                        .'|docs(?:\\.([^/]++))?(*:216)'
                        .'|co(?'
                            .'|ntexts/(.+)(?:\\.([^/]++))?(*:255)'
                            .'|mments(?'
                                .'|(?:\\.([^/]++))?(?'
                                    .'|(*:290)'
                                .')'
                                .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:328)'
                                .')'
                            .')'
                        .')'
                        .'|blog_posts(?'
                            .'|(?:\\.([^/]++))?(?'
                                .'|(*:370)'
                            .')'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:411)'
                                .')'
                                .'|([^/]++)/(?'
                                    .'|comments(?:\\.([^/]++))?(*:455)'
                                    .'|images(?:\\.([^/]++))?(*:484)'
                                .')'
                            .')'
                        .')'
                        .'|images(?'
                            .'|(?:\\.([^/]++))?(*:519)'
                            .'|(*:527)'
                            .'|/([^/\\.]++)(?:\\.([^/]++))?(?'
                                .'|(*:564)'
                            .')'
                        .')'
                        .'|users(?'
                            .'|(?:\\.([^/]++))?(*:597)'
                            .'|/(?'
                                .'|([^/\\.]++)(?:\\.([^/]++))?(?'
                                    .'|(*:637)'
                                .')'
                                .'|([^/]++)/reset\\-password(*:670)'
                                .'|confirm(*:685)'
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
        142 => [[['_route' => 'default_confirm_token', '_controller' => 'App\\Controller\\DefaultController::confirmUser'], ['token'], null, null, false, true, null]],
        185 => [[['_route' => 'api_entrypoint', '_controller' => 'api_platform.action.entrypoint', '_format' => '', '_api_respond' => 'true', 'index' => 'index'], ['index', '_format'], null, null, false, true, null]],
        216 => [[['_route' => 'api_doc', '_controller' => 'api_platform.action.documentation', '_format' => '', '_api_respond' => 'true'], ['_format'], null, null, false, true, null]],
        255 => [[['_route' => 'api_jsonld_context', '_controller' => 'api_platform.jsonld.action.context', '_format' => 'jsonld', '_api_respond' => 'true'], ['shortName', '_format'], null, null, false, true, null]],
        290 => [
            [['_route' => 'api_comments_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comments_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        328 => [
            [['_route' => 'api_comments_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_comments_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        370 => [
            [['_route' => 'api_blog_posts_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BlogPost', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_blog_posts_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\BlogPost', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null],
        ],
        411 => [
            [['_route' => 'api_blog_posts_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BlogPost', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_blog_posts_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\BlogPost', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        455 => [[['_route' => 'api_blog_posts_comments_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Comment', '_api_subresource_operation_name' => 'api_blog_posts_comments_get_subresource', '_api_subresource_context' => ['property' => 'comments', 'identifiers' => [['id', 'App\\Entity\\BlogPost', true]], 'collection' => true, 'operationId' => 'api_blog_posts_comments_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        484 => [[['_route' => 'api_blog_posts_images_get_subresource', '_controller' => 'api_platform.action.get_subresource', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_subresource_operation_name' => 'api_blog_posts_images_get_subresource', '_api_subresource_context' => ['property' => 'images', 'identifiers' => [['id', 'App\\Entity\\BlogPost', true]], 'collection' => true, 'operationId' => 'api_blog_posts_images_get_subresource']], ['id', '_format'], ['GET' => 0], null, false, true, null]],
        519 => [[['_route' => 'api_images_get_collection', '_controller' => 'api_platform.action.get_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_collection_operation_name' => 'get'], ['_format'], ['GET' => 0], null, false, true, null]],
        527 => [[['_route' => 'api_images_post_collection', '_controller' => 'App\\Controller\\UploadImageAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_collection_operation_name' => 'post', '_api_receive' => false], [], ['POST' => 0], null, false, false, null]],
        564 => [
            [['_route' => 'api_images_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_images_delete_item', '_controller' => 'api_platform.action.delete_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_item_operation_name' => 'delete'], ['id', '_format'], ['DELETE' => 0], null, false, true, null],
            [['_route' => 'api_images_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
            [['_route' => 'api_images_patch_item', '_controller' => 'api_platform.action.patch_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\Image', '_api_item_operation_name' => 'patch'], ['id', '_format'], ['PATCH' => 0], null, false, true, null],
        ],
        597 => [[['_route' => 'api_users_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_collection_operation_name' => 'post'], ['_format'], ['POST' => 0], null, false, true, null]],
        637 => [
            [['_route' => 'api_users_get_item', '_controller' => 'api_platform.action.get_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'get'], ['id', '_format'], ['GET' => 0], null, false, true, null],
            [['_route' => 'api_users_put_item', '_controller' => 'api_platform.action.put_item', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put'], ['id', '_format'], ['PUT' => 0], null, false, true, null],
        ],
        670 => [[['_route' => 'api_users_put-reset-password_item', '_controller' => 'App\\Controller\\ResetPasswordAction', '_format' => null, '_api_resource_class' => 'App\\Entity\\User', '_api_item_operation_name' => 'put-reset-password'], ['id'], ['PUT' => 0], null, false, false, null]],
        685 => [
            [['_route' => 'api_user_confirmations_post_collection', '_controller' => 'api_platform.action.post_collection', '_format' => null, '_api_resource_class' => 'App\\Entity\\UserConfirmation', '_api_collection_operation_name' => 'post'], [], ['POST' => 0], null, false, false, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
