<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGirlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('girls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address');
            $table->enum('age_group', ['10-14', '15-19']);
            $table->enum('hiv_status', ['positive', 'negative']);
            $table->date('date_of_birth');
            $table->string('village');
            $table->enum('schooling_status', ['in_school', 'out_of_school']);
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
        Schema::dropIfExists('girls');
    }
}
