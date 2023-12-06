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
        Schema::create('ecom_productos_apps', function (Blueprint $table) {
            $table->increments('idproductoapp');
            $table->integer('idapp');
            $table->string('producto');
            $table->string('url');
            $table->string('modelo');
            $table->string('descripcion_corta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('ecom_productos_apps');
    }
};
