<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpinionsHasReferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opinions_has_references', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('reference_id')->index('fk_references_has_opinions_references1_idx');
            $table->integer('opinion_id')->index('fk_references_has_opinions_opinions1_idx');
            $table->unique(['reference_id', 'opinion_id'], 'UniqueReference');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('opinions_has_references');
    }
}
