<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddStatusToTainentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tainants', function (Blueprint $table) {

            $table->enum('status', ['Paid', 'Unpaid'])->after('total')->default('Unpaid');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tainants', function (Blueprint $table) {
            $table->drop('status');

        });
    }
}
