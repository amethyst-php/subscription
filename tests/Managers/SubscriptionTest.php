<?php

namespace Amethyst\Tests\Managers;

use Amethyst\Fakers\SubscriptionFaker;
use Amethyst\Managers\SubscriptionManager;
use Amethyst\Tests\BaseTest;
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
