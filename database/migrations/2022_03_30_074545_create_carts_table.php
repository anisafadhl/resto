<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            
            // Info Produk & User
            $table->string('user_id')->nullable();
            $table->string('product_id')->nullable();
            $table->string('name')->nullable();
            $table->string('price')->nullable();
            $table->string('quantity')->nullable();
            $table->string('image')->nullable();
            
            // Status Pesanan
            $table->string('product_order')->default('no'); // 'no' = di keranjang, 'yes' = sudah dibeli
            
            // Info Transaksi (Ini yang dicari errornya)
            $table->string('invoice_no')->nullable();      // <-- PENTING!
            $table->string('payment_method')->nullable();  // Cash/Transfer
            $table->string('payment_status')->nullable();  // Pending/Paid
            
            // Info Pengiriman
            $table->string('address')->nullable();
            $table->string('phone')->nullable();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('carts');
    }
}