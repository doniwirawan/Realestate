<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SetupDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('realestate', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img');
            $table->char('slug', 200);
            $table->char('name', 200);
            $table->string('location');
            $table->string('type');
            $table->longText('desc');
            $table->integer('beds');
            $table->integer('baths');
            $table->integer('pools');
            $table->decimal('size', 11, 2);
            $table->decimal('price_usd', 11, 2);
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
        //
    }
}
