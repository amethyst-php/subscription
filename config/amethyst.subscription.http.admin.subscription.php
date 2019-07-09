<?php

return [
    'enabled'    => true,
    'controller' => Amethyst\Http\Controllers\Admin\SubscriptionsController::class,
    'router'     => [
        'as'     => 'subscription.',
        'prefix' => '/subscriptions',
    ],
];
