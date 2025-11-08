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
        Schema::create('quote_requests', function (Blueprint $table) {
            $table->id();
            
            // Contact Information
            $table->string('full_name');
            $table->string('email');
            $table->string('phone');
            $table->enum('preferred_contact', ['phone', 'email', 'whatsapp'])->default('phone');
            
            // Move Details
            $table->string('origin_address');
            $table->string('origin_city');
            $table->string('destination_address');
            $table->string('destination_city');
            $table->date('preferred_date');
            $table->boolean('date_flexible')->default(false);
            
            // Move Size
            $table->enum('move_type', ['residential', 'commercial', 'office', 'warehouse'])->default('residential');
            $table->enum('property_size', ['studio', '1_bedroom', '2_bedroom', '3_bedroom', '4_bedroom', '5+_bedroom', 'small_office', 'medium_office', 'large_office'])->nullable();
            $table->text('inventory_list')->nullable();
            
            // Special Requirements
            $table->boolean('packing_service')->default(false);
            $table->boolean('storage_required')->default(false);
            $table->boolean('fragile_items')->default(false);
            $table->boolean('heavy_items')->default(false);
            $table->boolean('assembly_required')->default(false);
            $table->enum('access_type', ['ground_floor', 'elevator', 'stairs', 'long_carry'])->nullable();
            
            // Additional Services
            $table->boolean('insurance_required')->default(true);
            $table->boolean('unpacking_service')->default(false);
            $table->text('special_instructions')->nullable();
            
            // Budget & Status
            $table->decimal('estimated_budget', 10, 2)->nullable();
            $table->enum('status', ['pending', 'reviewed', 'quoted', 'accepted', 'declined'])->default('pending');
            $table->decimal('quoted_amount', 10, 2)->nullable();
            $table->text('admin_notes')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quote_requests');
    }
};