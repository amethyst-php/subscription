<?php

namespace Railken\Amethyst\Tests;

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
            \Railken\Amethyst\Providers\SubscriptionServiceProvider::class,
            \Railken\Amethyst\Providers\FooServiceProvider::class,
        ];
    }
}
