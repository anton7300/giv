<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGivawaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('givaways', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('created_by')->unsigned();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');

            $table->string('givaway_by');
            $table->string('name');
            $table->string('description');
            $table->integer('price');
            $table->integer('subscribers_count');
            $table->dateTime('start_at');
            $table->dateTime('end_at');
            $table->integer('sponsors_count')->nullable();
            $table->boolean('is_verification')->nullable();
            $table->boolean('is_active')->default(1);

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
        Schema::dropIfExists('givaways');
    }
}
