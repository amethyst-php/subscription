<?php

namespace Railken\Amethyst\Schemas;

use Railken\Amethyst\Managers\ConsumeRuleManager;
use Railken\Lem\Attributes;
use Railken\Lem\Schema;

class SubscriptionSchema extends Schema
{
    /**
     * Get all the attributes.
     *
     * @var array
     */
    public function getAttributes()
    {
        return [
            Attributes\IdAttribute::make(),
            Attributes\EnumAttribute::make('status', config('amethyst.subscription.data.subscription.attributes.status.options'))
                ->setRequired(true)
                ->setDefault(function ($entity) {
                    return config('amethyst.subscription.data.subscription.attributes.status.options')[0];
                }),
            Attributes\YamlAttribute::make('metadata'),
            Attributes\BelongsToAttribute::make('consume_rule_id')
                ->setRelationManager(ConsumeRuleManager::class)
                ->setRelationName('consume_rule'),
            Attributes\EnumAttribute::make('subscriptionable_type', app('amethyst')->getMorphListable('subscription', 'subscriptionable')),
            Attributes\MorphToAttribute::make('subscriptionable_id')
                ->setRelationKey('subscriptionable_type')
                ->setRelationName('subscriptionable')
                ->setRelations(app('amethyst')->getMorphRelationable('subscription', 'subscriptionable')),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
