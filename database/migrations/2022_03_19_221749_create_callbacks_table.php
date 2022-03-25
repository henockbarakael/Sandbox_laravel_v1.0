<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCallbacksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('callbacks', function (Blueprint $table) {
            $table->id();
            $table->string('customer_number')->nullable();
            $table->double('amount')->nullable();
            $table->string('method')->nullable();
            $table->string('currency')->nullable();
            $table->string('status')->nullable();
            $table->string('action')->nullable();
            $table->string('reference')->nullable();
            $table->string('transaction_status')->nullable();
            $table->string('comment')->nullable();
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
        Schema::dropIfExists('callbacks');
    }
}
