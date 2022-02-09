<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OrderTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_time', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('shipper_id')->nullable();
            $table->Integer('customer_id');
            $table->Integer('status_customer');
            $table->string('subtotal');
            $table->string('coupon')->default(0);
            $table->string('discount');
            $table->string('total');
            $table->string('username');
            $table->string('email');
            $table->string('address');
            $table->string('telephone');
            $table->string('payment');
            $table->string('order_status')->default(0);
            $table->string('status')->default(1);
            $table->timestamp('created_at')->default(\DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(\DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order_time');
    }
}
