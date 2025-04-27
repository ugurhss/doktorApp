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
            $table->id();
            $table->string('bio');
            $table->string('hospital_name');

// 'speciality_id' kolonunu oluşturuyoruz (uzmanlık alanı id'si)
// Bu kolon 'specialists' tablosundaki 'id' kolonuna referans verir (foreign key ilişki kuruluyor)
// 'onDelete('cascade')' sayesinde ilgili uzmanlık silinince, ona bağlı doktorlar da otomatik olarak silinecek
$table->unsignedBigInteger('speciality_id')->references('id')->on('specialists')->onDelete('cascade');
            $table->integer('experience');
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};
