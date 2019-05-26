<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->bigIncrements('annonceid');
            $table->string('job');
            $table->string('entreprise');
            $table->string('localization');
            $table->string('email');
            $table->string('type_contrat');
            $table->float('startsalary');
            $table->float('endsalary');
            $table->string('per_temp');
            $table->text('describe_entreprise');
            $table->text('describe_poste');
            $table->text('profil_recherche');
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
        Schema::dropIfExists('annonces');
    }
}
