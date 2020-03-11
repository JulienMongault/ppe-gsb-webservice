<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGsbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praticien', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->bigIncrements('PRA_NUM');
            $table->string('PRA_NOM', 25)->nullable();
            $table->string('PRA_PRENOM', 30)->nullable();
            $table->string('PRA_ADRESSE', 50)->nullable();
            $table->string('PRA_CP', 5)->nullable();
            $table->string('PRA_VILLE', 25)->nullable();
            $table->float('PRA_COEFNOTORIETE')->nullable();
            $table->string('TYP_CODE', 3);
            $table->foreign('TYP_CODE')->references('TYP_CODE')->on('type_praticien');
        });
        
        Schema::create('type_praticien', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->string('TYP_CODE', 3);
            $table->string('TYP_LIBELLE', 25)->nullable();
            $table->string('TYP_LIEU', 35)->nullable();
            $table->primary('TYP_CODE');
        });

        Schema::create('visiteur', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->string('VIS_MATRICULE', 10);
            $table->string('VIS_NOM', 25)->nullable();
            $table->string('VIS_PRENOM', 50)->nullable();
            $table->string('VIS_ADRESSE', 50)->nullable();
            $table->string('VIS_CP', 5)->nullable();
            $table->string('VIS_VILLE', 30)->nullable();
            $table->date('VIS_DATEEMBAUCHE')->nullable();
            $table->string('SEC_CODE', 1)->nullable();
            $table->string('LAB_CODE', 2);
            $table->primary('VIS_MATRICULE');
            $table->foreign('SEC_CODE')->references('SEC_CODE')->on('secteur');
            $table->foreign('LAB_CODE')->references('LAB_CODE')->on('labo');
        });

        Schema::create('secteur', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->string('SEC_CODE', 1);
            $table->string('SEC_LIBELLE', 15)->nullable();
            $table->primary('SEC_CODE');
        });

        Schema::create('labo', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->string('LAB_CODE', 2);
            $table->string('LAB_NOM', 10)->nullable();
            $table->string('LAB_CHEFVENTE', 20)->nullable();
            $table->primary('LAB_CODE');
        });

        Schema::create('rapport_visite', function (Blueprint $table) {
            $table->engine = 'MyISAM';
            $table->string('VIS_MATRICULE', 10);
            $table->bigIncrements('RAP_NUM');
            $table->integer('PRA_NUM');
            $table->date('RAP_DATE')->nullable();
            $table->string('RAP_BILAN', 255)->nullable();
            $table->string('RAP_MOTIF', 255)->nullable();
            $table->foreign('VIS_MATRICULE')->references('VIS_MATRICULE')->on('visiteur');
            $table->foreign('PRA_NUM')->references('PRA_NUM')->on('praticien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('praticien');
        Schema::dropIfExists('type_praticien');
        Schema::dropIfExists('visiteur');
        Schema::dropIfExists('secteur');
        Schema::dropIfExists('labo');
        Schema::dropIfExists('rapport_visite');
    }
}
