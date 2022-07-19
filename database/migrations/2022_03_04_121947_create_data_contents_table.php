<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_contents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();//->constrained('users');
            $table->foreignId('projects_id')->constrained('projects');
            $table->foreignId('project_types_id')->constrained('project_types');
            $table->string('name');
            $table->string('nameProject');
            $table->text('description')->nullable();
            $table->string('url')->nullable();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_contents');
    }
}
