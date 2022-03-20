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
        Schema::create('irises', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->string('region');
            $table->string('department');
            $table->string('iris');
            $table->string('latitude');
            $table->string('longitude');
            $table->json('geo_shape')->nullable();
            $table->integer('score_global')->default(0);
            $table->integer('information_access_score')->default(0);
            $table->integer('access_to_digital_interfaces_score')->default(0);
            $table->integer('administrative_skills_score')->default(0);
            $table->integer('digital_academic_skills_score')->default(0);
            $table->integer('global_access_score')->default(0);
            $table->integer('global_skills')->default(0);
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
        Schema::dropIfExists('irises');
    }
};
