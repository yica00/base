<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',10);
            $table->string('phone',20);
            $table->integer('amount')->nullable();
            $table->string('product',20)->nullable();
            $table->string('message',200)->nullable();
            $table->string('ip',20)->nullable();
            $table->tinyInteger('has_read')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
