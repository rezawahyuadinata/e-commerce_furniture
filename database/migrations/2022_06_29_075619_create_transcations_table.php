<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTranscationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transcations', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id');
            $table->string('name')->nullable()->default('text');
            $table->string('email')->nullable()->default('text');
            $table->text('address')->nullable()->default('text');
            $table->string('phone')->nullable()->default('text');
            $table->string('courier')->nullable()->default('text');
            $table->string('payment')->default('MIDTRANS');
            $table->string('payment_url')->nullable();
            $table->bigInteger('price')->default(0);
            $table->string('status')->default('PENDING');
            $table->softDeletes();
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
        Schema::dropIfExists('transcations');
    }
}
