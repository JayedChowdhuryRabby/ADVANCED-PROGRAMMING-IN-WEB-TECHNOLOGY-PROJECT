<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('request_order_to_service_providers', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('productName');
            $table->string('quantity');
            $table->string('details');
            $table->string('deliverSystem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('request_order_to_service_providers');
    }
};
