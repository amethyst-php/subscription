<?php

return [
    'table'      => 'amethyst_subscriptions',
    'comment'    => 'Subscription',
    'model'      => Railken\Amethyst\Models\Subscription::class,
    'schema'     => Railken\Amethyst\Schemas\SubscriptionSchema::class,
    'repository' => Railken\Amethyst\Repositories\SubscriptionRepository::class,
    'serializer' => Railken\Amethyst\Serializers\SubscriptionSerializer::class,
    'validator'  => Railken\Amethyst\Validators\SubscriptionValidator::class,
    'authorizer' => Railken\Amethyst\Authorizers\SubscriptionAuthorizer::class,
    'faker'      => Railken\Amethyst\Fakers\SubscriptionFaker::class,
    'manager'    => Railken\Amethyst\Managers\SubscriptionManager::class,
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
