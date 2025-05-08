<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('menus', function (Blueprint $table) {
            $table->string('slug')->unique()->after('name');
        });
    }


    /**
     * Reverse the migrations.
     */

    public function up()
    {
        if (!Schema::hasColumn('menus', 'slug')) {
            Schema::table('menus', function (Blueprint $table) {
                $table->string('slug')->unique()->after('name');
            });
        }
    }

};
