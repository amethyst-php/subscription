<?php

namespace Amethyst\Fakers;

use Faker\Factory;
use Railken\Bag;
use Railken\Lem\Faker;

class SubscriptionFaker extends Faker
{
    /**
     * @return \Railken\Bag
     */
    public function parameters()
    {
        $faker = Factory::create();

        $bag = new Bag();
        $bag->set('consume_rule', ConsumeRuleFaker::make()->parameters()->toArray());
        $bag->set('status', 'pending');
        $bag->set('metadata', 'day:monday');
        $bag->set('subscriptionable_type', 'foo');
        $bag->set('subscriptionable', FooFaker::make()->parameters()->toArray());

        return $bag;
    }
}
