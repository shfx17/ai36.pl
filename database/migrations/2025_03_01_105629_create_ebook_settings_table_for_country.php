<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ebook_settings', function (Blueprint $table) {
            $table->id();
            $table->string('country')->unique();
            $table->decimal('price', 10, 2);
            $table->string('currency');
            $table->timestamps();
        });

        DB::table('ebook_settings')->insert([
            ['country' => 'PL', 'price' => 19.99, 'currency' => 'PLN', 'created_at' => now(), 'updated_at' => now()],
            ['country' => 'US', 'price' => 19.99, 'currency' => 'USD', 'created_at' => now(), 'updated_at' => now()],
            ['country' => 'UK', 'price' => 19.99, 'currency' => 'GBP', 'created_at' => now(), 'updated_at' => now()],
            ['country' => 'DE', 'price' => 19.99, 'currency' => 'EUR', 'created_at' => now(), 'updated_at' => now()],
            ['country' => 'FR', 'price' => 19.99, 'currency' => 'EUR', 'created_at' => now(), 'updated_at' => now()],
            ['country' => 'ES', 'price' => 19.99, 'currency' => 'EUR', 'created_at' => now(), 'updated_at' => now()],
            ['country' => 'NO', 'price' => 19.99, 'currency' => 'NOK', 'created_at' => now(), 'updated_at' => now()],
            ['country' => 'AU', 'price' => 19.99, 'currency' => 'AUD', 'created_at' => now(), 'updated_at' => now()],
            ['country' => 'UA', 'price' => 19.99, 'currency' => 'UAH', 'created_at' => now(), 'updated_at' => now()],
            ['country' => 'RO', 'price' => 19.99, 'currency' => 'RUB', 'created_at' => now(), 'updated_at' => now()]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ebook_settings');
    }
};
