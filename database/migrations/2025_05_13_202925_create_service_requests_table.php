<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceRequestsTable extends Migration
{
    public function up()
    {
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            // aquí todas las columnas que necesitas; por ejemplo:
            $table->string('full_name');
            $table->string('mobile_phone');
            $table->string('landline')->nullable();
            $table->string('email');
            $table->string('preferred_contact');
            // … continúa con los demás campos …
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('service_requests');
    }
}
