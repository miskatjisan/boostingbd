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
        Schema::create('admin_services', function (Blueprint $table) {
            $table->id();


            $table->string('title');
            $table->string('catagory_id');
            $table->text('short_discr');
            $table->text('discr');
            $table->string('image');
            $table->string('card_title');
            $table->integer('price');
            $table->string('feature1')->nullable();
            $table->string('feature2')->nullable();
            $table->string('feature3')->nullable();
            $table->string('feature4')->nullable();
            $table->string('feature5')->nullable();
            $table->string('feature6')->nullable();
            $table->string('feature7')->nullable();
            $table->string('feature8')->nullable();

           

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
        Schema::dropIfExists('admin_services');
    }
};
