<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');//->constrained('users');
            $table->foreignId('person_physical_id')->nullable()->constrained('person_physicals');
            $table->foreignId('person_legal_id')->nullable()->constrained('person_legals');
            $table->string('type');
            $table->string('email');
            $table->binary('photo');

            $table->timestamps();
            $table->softDeletes();

            //nome da chave foreignid           coluna      tabela
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('people');
    }
}
