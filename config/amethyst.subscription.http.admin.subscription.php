<?php

return [
    'enabled'    => true,
    'controller' => Railken\Amethyst\Http\Controllers\Admin\SubscriptionsController::class,
    'router'     => [
        'as'     => 'subscription.',
        'prefix' => '/subscriptions',
    ],
];
