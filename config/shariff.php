<?php

return [
    /*
     * Backend Url
     */
    'url' => '_shariff',

    /*
     * Cache configuration
     */
    'cache' => [
        // Default cache time in seconds
        'ttl' => 3600,
        // Cache key prefix to avoid collisions
        'prefix' => 'shariff:'
    ],

    /*
     * Theme (standard, grey and white.)
     */
    'style' => 'standard',

    'theme' => 'standard',

    /*
     * Orientation (vertical will stack the buttons vertically.)
     */

    'orientation' => 'horizontal',

    'buttons' => [
        'twitter',
        'facebook',
        'googleplus',
        'linkedin',
        'pinterest',
        'xing',
        'whatsapp',
        'mail',
        'addthis',
        'tumblr',
        'flattr',
        'diaspora',
        'reddit',
        'stumbleupon',
        'threema',
        'weibo',
        'tencent-weibo',
        'qzone',
        'print',
        'telegram',
        'vk',
        'flipboard',
        'info',
    ],

    /*
     * Default URL that is the subject of
     * the share buttons.
     *
     * Falls back to the request base URL
     */
    'domains' => [
        'www.hfo-telecom.de'
    ],

    /*
     * Globally enabled services
     */
    'services' => [
        'Facebook',
        'LinkedIn',
        'Reddit',
        'StumbleUpon',
        'Flattr',
        'Pinterest',
        'Xing',
        'AddThis',
        'Vk'
    ],

    'Facebook' => [
        'app_id' => env('FACEBOOK_APP_ID', null),
        'secret' => env('FACEBOOK_SECRET', null)
    ]
];
