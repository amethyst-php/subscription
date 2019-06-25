<?php

namespace Railken\Amethyst\Schemas;

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
                ->setRequired(true),
            Attributes\LongTextAttribute::make('description'),
            Attributes\EnumAttribute::make('subscriptionable_type', app('amethyst')->getMorphListable('subscription', 'subscriptionable'))
                ->setRequired(true),
            Attributes\MorphToAttribute::make('subscriptionable_id')
                ->setRelationKey('subscriptionable_type')
                ->setRelationName('subscriptionable')
                ->setRelations(app('amethyst')->getMorphRelationable('subscription', 'subscriptionable'))
                ->setRequired(true),
            Attributes\CreatedAtAttribute::make(),
            Attributes\UpdatedAtAttribute::make(),
            Attributes\DeletedAtAttribute::make(),
        ];
    }
}
