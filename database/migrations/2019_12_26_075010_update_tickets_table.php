<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if (Schema::hasColumn('tickets', 'slug'))
        {
            Schema::table('tickets', function ($table) {
                $table->string('slug')->nullable()->change();
            });
        }
        if (Schema::hasColumn('tickets', 'user_id')) {
            Schema::table('tickets', function ($table) {
                $table->string('user_id')->nullable()->change();
            });
        }

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('tickets', function ($table) {
            $table->dropColumn(['user_id', 'slug']);
        });

    }
}
