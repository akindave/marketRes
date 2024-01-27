<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->string('vendor_join')->nullable();
            $table->longText('vendor_short_info')->nullable();
            $table->string('vendor_instagram')->nullable();
            $table->string('vendor_facebook')->nullable();
            $table->string('vendor_website')->nullable();
            $table->longText('vendor_short_video')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            //
        });
    }
};
