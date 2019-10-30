<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaywayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payway_type', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->timestamps();
        });

        Schema::create('currency', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->string('code')->unique();
            $table->timestamps();
        });

        Schema::create('payway', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->nullable();
            $table->unsignedBigInteger('payway_type_id')->nullable();
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->timestamps();

            $table->foreign('payway_type_id')->references('id')->on('payway_type');
            $table->foreign('currency_id')->references('id')->on('currency');
        });
    }

    public function down()
    {   Schema::table('payway',function (Blueprint $table){
        $table->dropForeign(['payway_type_id']);
        $table->dropForeign(['currency_id']);
    });
        Schema::dropIfExists('payway');
        Schema::dropIfExists('currency');
        Schema::dropIfExists('payway_type');
    }
}
