<?php

namespace Railken\Amethyst\Authorizers;

use Railken\Lem\Authorizer;
use Railken\Lem\Tokens;

class SubscriptionAuthorizer extends Authorizer
{
    /**
     * List of all permissions.
     *
     * @var array
     */
    protected $permissions = [
        Tokens::PERMISSION_CREATE => 'subscription.create',
        Tokens::PERMISSION_UPDATE => 'subscription.update',
        Tokens::PERMISSION_SHOW   => 'subscription.show',
        Tokens::PERMISSION_REMOVE => 'subscription.remove',
    ];
}
