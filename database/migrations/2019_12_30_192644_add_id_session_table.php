<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('result', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('session');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('result', function (Blueprint $table) {
            $table->dropColumn('id');
            $table->dropColumn('session');
        });
    }
}
