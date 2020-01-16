<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProviderProviderIdSoftDeleteToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        if (Schema::hasColumns('users', ['provider', 'provider_id', 'deleted_id'])) {

        }
        else {
            Schema::table('users', function (Blueprint $table) {
                //
                $table->string('provider')->nullable();
                $table->string('provider_id')->nullable();
                $table->string('password')->nullable()->change();
                $table->softDeletes();
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
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn(['provider', 'provider_id', 'deleted_at']);
        });
    }
}
