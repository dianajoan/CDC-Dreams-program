<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgressTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progress', function (Blueprint $table) {
            $table->id();
            $table->foreignId('girl_id')->constrained();
            $table->foreignId('event_id')->constrained();
            $table->string('lessons_attended');
            $table->string('skills_attained');
            $table->string('finish_without_hiv');
            $table->string('standalone_in_community');
            $table->enum('status',['active','inactive'])->default('inactive');
            $table->string('slug')->unique();
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('progress');
    }
}
