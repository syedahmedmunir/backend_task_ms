<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddOtherColumnsInUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
             $table->string('first_name')->nullable()->after('id');
             $table->string('last_name')->nullable()->after('first_name');
             $table->bigInteger('country_id')->nullable()->default(12)->after('name');
             $table->char('status', 4)->nullable()->default('A')->after('password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('first_name');
            $table->dropColumn('last_name');
            $table->dropColumn('country_id');
            $table->dropColumn('status');
        });
    }
}
