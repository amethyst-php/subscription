<?php

namespace Amethyst\Providers;

use Amethyst\Common\CommonServiceProvider;

class SubscriptionServiceProvider extends CommonServiceProvider
{
    /**
     * @inherit
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\ConsumeRuleServiceProvider::class);
    }
}
