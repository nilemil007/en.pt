<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItopReplacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('itop_replaces', function (Blueprint $table) {
            $table->id();
            $table->string('rso_name', 50);
            $table->integer('rso_itop');
            $table->integer('rep_itop');
            $table->bigInteger('ev_swap');
            $table->integer('balance')->nullable();
            $table->integer('status')->default(0);
            $table->text('rep_reason');
            $table->timestamp('payment_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('itop_replaces');
    }
}
