<?php

namespace Amethyst\Managers;

use Amethyst\Core\ConfigurableManager;
use Railken\Lem\Manager;

/**
 * @method \Amethyst\Models\Subscription                 newEntity()
 * @method \Amethyst\Schemas\SubscriptionSchema          getSchema()
 * @method \Amethyst\Repositories\SubscriptionRepository getRepository()
 * @method \Amethyst\Serializers\SubscriptionSerializer  getSerializer()
 * @method \Amethyst\Validators\SubscriptionValidator    getValidator()
 * @method \Amethyst\Authorizers\SubscriptionAuthorizer  getAuthorizer()
 */
class SubscriptionManager extends Manager
{
    use ConfigurableManager;

    /**
     * @var string
     */
    protected $config = 'amethyst.subscription.data.subscription';
}
