<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelativeNameInOccupants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('occupants', function (Blueprint $table) {
            $table->string('relative_name')->nullable();
            $table->string('relative_contact')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('occupants', function (Blueprint $table) {
            $table->dropColumn('relative_name');
            $table->dropColumn('relative_contact');
        });
    }
}
