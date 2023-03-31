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
        Schema::create('customer', function($table){
            $table->id();
            $table->string('nama')->nulllable();
            $table->text('alamat')->nulltable();
            $table->string('status')->nulltable();
            $table->string('agama')->nulltable();
            $table->date('tgl_lahir')->default();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
