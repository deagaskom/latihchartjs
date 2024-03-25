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
        Schema::create('tepatwaktujumlah', function (Blueprint $table) {
            $table->id();
            $table->decimal('skortahun1', 2); // 5 total digits
            $table->decimal('skortahun2', 2); // 5 total digits
            $table->decimal('baseline', 2); // 5 total digits
            $table->decimal('skortarget', 2); // 5 total digits
            $table->string('label1');
            $table->string('label2');
            $table->string('label3');
            $table->string('label4');
            $table->string('tahunnow');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tepatwaktujumlah');
    }
};
