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
        Schema::create('doctors', function (Blueprint $table) {
            $table->id(); // Bu, auto-incrementing primary key oluşturur (doctors tablosu için).
            $table->string('hospital_name'); // Hastane ismini tutacak bir kolon.

            // 'speciality_id' kolonunu oluşturuyoruz, bu kolon 'specialities' tablosundaki 'id' kolonuna referans veriyor.
            // Yani, her doktor bir uzmanlık alanına sahip olacak.
            $table->unsignedBigInteger('speciality_id');
            $table->foreign('speciality_id')
                  ->references('id')
                  ->on('specialities')
                  ->onDelete('cascade'); // Eğer bir 'speciality' silinirse, ona bağlı tüm doktorlar da silinir.

            // 'user_id' kolonunu oluşturuyoruz, bu kolon 'users' tablosundaki 'id' kolonuna referans veriyor.
            // Bu ilişki, her doktorun bir kullanıcıya (admin, doktor vs.) ait olduğunu belirtir.
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade'); // Eğer bir kullanıcı silinirse, ona bağlı tüm doktorlar da silinir.

            // Diğer kolonlar
            $table->string('bio')->nullable(); // Doktorun biyografisi. Null olabilir.
            $table->integer('experience')->nullable(); // Doktorun deneyimi. Null olabilir.
            $table->string('twitter')->nullable(); // Twitter hesabı. Null olabilir.
            $table->string('instagram')->nullable(); // Instagram hesabı. Null olabilir.

            // Laravel otomatik olarak 'created_at' ve 'updated_at' timestamp'larını ekler.
            $table->timestamps();
        });
    }

    public function down(): void
    {
        // 'doctors' tablosu silindiğinde, tüm ilişkilendirilmiş veriler de silinir.
        Schema::dropIfExists('doctors');
    }

};
