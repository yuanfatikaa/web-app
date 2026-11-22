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
        Schema::create('users', function (Blueprint $table) {
            // untuk primary key id auto increment
            $table->id();
            // membuat field nama tipe varchar(100)
            $table->string('nama', 100);
            // membuat field email varchar(100) unik
            $table->string('email', 100)->unique();
            // membuat field password tipe varchar(100)
            $table->string('password', 100);
            // membuat field foto tipe tinytext
            $table->tinyText('foto');
            // membuat role tipe enum('admin','user')
            $table->enum('role', ['admin', 'user']);
            // membuat field created_at dan updated_at tipe timestamp
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};