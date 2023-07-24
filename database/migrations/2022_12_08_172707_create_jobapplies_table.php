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
        Schema::create('jobapplies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('education');
            $table->integer('nid');
            $table->string('resume');
            $table->string('jobTopic');
            $table->string('joinType');
            $table->string('workType');
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
        Schema::dropIfExists('jobapplies');
    }
};
