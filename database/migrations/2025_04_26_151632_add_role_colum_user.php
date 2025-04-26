<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role')->default(0)->after('email'); // role sütunu ekleniyor
            // default değeri user olarak ayarlandı
            // after ile email sütunundan sonra ekleniyor
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role'); // role sütunu siliniyor
            // default değeri user olarak ayarlandı
            // after ile email sütunundan sonra ekleniyor
        });
    }
};
