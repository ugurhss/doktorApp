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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');  // Menü adı
            $table->timestamps();
        });

        // Menü ile haber arasındaki ilişkiyi tutacak pivot tablosunu oluşturalım
        Schema::create('menu_news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('menu_id')->constrained()->onDelete('cascade');  // Menü ile ilişki
            $table->foreignId('news_id')->constrained()->onDelete('cascade');  // Haber ile ilişki
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};
