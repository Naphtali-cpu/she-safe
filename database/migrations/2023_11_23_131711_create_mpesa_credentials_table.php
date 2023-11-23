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
        Schema::create('mpesa_credentials', function (Blueprint $table) {
            $table->id();
            $table->integer('shortcode');
            $table->string('consumerkey');
            $table->string('consumersecret');
            $table->string('passkey');
            $table->string('transactiontype');
            $table->string('callback');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mpesa_credentials');
    }
};
