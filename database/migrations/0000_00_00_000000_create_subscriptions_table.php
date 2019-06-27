<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class CreateSubscriptionsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create(Config::get('amethyst.subscription.data.subscription.table'), function (Blueprint $table) {
            $table->increments('id');
            $table->integer('consume_rule_id')->unsigned()->nullable();
            $table->foreign('consume_rule_id')->references('id')->on(Config::get('amethyst.consume-rule.data.consume-rule.table'));
            $table->string('status');
            $table->text('metadata')->nullable();
            $table->integer('subscriptionable_id')->unsigned()->nullable();
            $table->string('subscriptionable_type')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists(Config::get('amethyst.subscription.data.subscription.table'));
    }
}
