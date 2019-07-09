<?php

namespace Amethyst\Tests;

abstract class BaseTest extends \Orchestra\Testbench\TestCase
{
    /**
     * Setup the test environment.
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->artisan('migrate:fresh');

        app('amethyst')->pushMorphRelation('subscription', 'subscriptionable', 'foo');
    }

    protected function getPackageProviders($app)
    {
        return [
            \Amethyst\Providers\SubscriptionServiceProvider::class,
            \Amethyst\Providers\FooServiceProvider::class,
        ];
    }
}
