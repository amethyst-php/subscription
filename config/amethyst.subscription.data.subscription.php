<?php

return [
    'table'      => 'amethyst_subscriptions',
    'comment'    => 'Subscription',
    'model'      => Amethyst\Models\Subscription::class,
    'schema'     => Amethyst\Schemas\SubscriptionSchema::class,
    'repository' => Amethyst\Repositories\SubscriptionRepository::class,
    'serializer' => Amethyst\Serializers\SubscriptionSerializer::class,
    'validator'  => Amethyst\Validators\SubscriptionValidator::class,
    'authorizer' => Amethyst\Authorizers\SubscriptionAuthorizer::class,
    'faker'      => Amethyst\Fakers\SubscriptionFaker::class,
    'manager'    => Amethyst\Managers\SubscriptionManager::class,
    'attributes' => [
        'status' => [
            'options' => [
                'pending',
                'active',
                'suspended',
                'terminated',
            ],
        ],
    ],
];
