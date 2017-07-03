<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'twitter' => [
        'search' => [
            'q' => env('TWITTER_SEARCH_QUERY'),
            'count' => env('TWITTER_SEARCH_RESULT_COUNT', 10),
            'result_type' => 'mixed',
        ],
    ],

    'meetup' => [
        'key' => env('MEETUP_KEY'),
        'urlName' => env('MEETUP_URL_NAME'),
    ],

    'community_inviter' => [
        'join_url' => env('COMMUNITY_INVITER_JOIN_URL'),
        'slack_team' => env('COMMUNITY_INVITER_SLACK_TEAM'),
        'slack_team_readable' => env('COMMUNITY_INVITER_SLACK_TEAM_READABLE'),
    ],

    'google_tag_manager' => [
        'id' => env('GOOGLE_TAG_MANAGER_ID'),
    ],

];
