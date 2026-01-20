<?php

use App\Enums\ActiveInactiveStatus;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
         Schema::create('airport_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sort_order')->index()->default(0);

            $table->string('route_from')->default('Sheffield');
            // $table->string('airport_name');
            // $table->string('airport_code', 5);
            $table->decimal('executive_saloon_price', 8, 2);
            $table->decimal('eight_seater_price', 8, 2);
            $table->string('status')->index()->default(ActiveInactiveStatus::ACTIVE->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airport_prices');
    }
};
