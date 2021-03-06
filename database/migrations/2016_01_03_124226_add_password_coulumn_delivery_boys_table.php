<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddPasswordCoulumnDeliveryBoysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::table('delivery_boys', function ($table) {
        $table->Text('jooleh_pass');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('delivery_boys', function ($table) {
        $table->dropColumn('jooleh_pass');
      });
    }
}
