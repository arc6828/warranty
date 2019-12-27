<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeEnergyUsagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('energy_usages', function (Blueprint $table) {
          $table->float('watts',16,2)->nullable()->change();
          $table->float('joules',16,2)->nullable()->change();
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('energy_uases', function (Blueprint $table) {
            //
        });
    }
}
