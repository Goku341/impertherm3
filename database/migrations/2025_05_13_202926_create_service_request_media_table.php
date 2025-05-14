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
        Schema::create('service_request_media', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_request_id')
                  ->constrained()
                  ->cascadeOnDelete();
            $table->string('file_path');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_request_media');
    }
};
