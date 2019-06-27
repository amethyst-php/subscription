<?php

namespace Railken\Amethyst\Tests\Managers;

use Railken\Amethyst\Fakers\SubscriptionFaker;
use Railken\Amethyst\Managers\SubscriptionManager;
use Railken\Amethyst\Tests\BaseTest;
use Railken\Lem\Support\Testing\TestableBaseTrait;

class SubscriptionTest extends BaseTest
{
    use TestableBaseTrait;

    /**
     * Manager class.
     *
     * @var string
     */
    protected $manager = SubscriptionManager::class;

    /**
     * Faker class.
     *
     * @var string
     */
    protected $faker = SubscriptionFaker::class;
}
