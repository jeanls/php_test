<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncidentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incidents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 255)->nullable(false);
            $table->text('description')->nullable(false);
            $table->enum('criticality', ['alta', 'media', 'baixa'])->nullable(false);
            $table->enum('type', ['ataque brute force', 'credenciais vazadas', 'ataque ddos', 'atividades anormais de usuários'])->nullable(false);
            $table->enum('status', ['aberto', 'fechado'])->default('aberto')->nullable(false);
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
        Schema::dropIfExists('incidents');
    }
}
