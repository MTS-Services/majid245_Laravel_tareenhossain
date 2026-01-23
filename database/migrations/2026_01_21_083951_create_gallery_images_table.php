<?php

use App\Enums\ActiveInactiveStatus;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gallery_images', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sort_order')->index()->default(0);
            $table->unsignedBigInteger('gallery_category_id')->nullable();
            $table->string('image');
            $table->string('alt')->nullable();
            $table->string('status')->index()->default(ActiveInactiveStatus::ACTIVE->value);
            $table->timestamps();

            $table->foreign('gallery_category_id')->references('id')->on('gallery_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_images');
    }
};
