<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToUsersCommentOpinionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users_comment_opinions', function (Blueprint $table) {
            $table->foreign('opinion_id', 'fk_users_has_opinions_opinions1')->references('id')->on('opinions')->onUpdate('NO ACTION')->onDelete('NO ACTION');
            $table->foreign('user_id', 'fk_users_has_opinions_users1')->references('id')->on('users')->onUpdate('NO ACTION')->onDelete('NO ACTION');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users_comment_opinions', function (Blueprint $table) {
            $table->dropForeign('fk_users_has_opinions_opinions1');
            $table->dropForeign('fk_users_has_opinions_users1');
        });
    }
}