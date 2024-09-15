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
        Schema::create('first_salary_returns', function (Blueprint $table) {
            $table->id();  // Primary key
            $table->string('name');
            $table->string('nid')->unique();
            $table->date('dob')->nullable();;
            $table->string('etin')->nullable();;
            $table->string('circle')->nullable();;
            $table->string('taxes_zone')->nullable();;
            $table->string('assessment_year')->nullable();; // Default could be handled in the form or controller
            $table->string('spouse')->nullable(); // Nullable because it’s optional
            $table->string('address')->nullable();;
            $table->string('telephone')->nullable();
            $table->string('mobile')->nullable();;
            $table->string('email')->nullable();
            $table->decimal('past_savings', 15, 2)->nullable();  // Store money values with precision
            $table->integer('ornaments')->nullable();  // Store quantity as integer
            $table->string('vehicle')->nullable();
            $table->decimal('furniture', 15, 2)->nullable();  // Store furniture values as decimals
            $table->string('financial_assets')->nullable();  // Store as a text field
            $table->string('land_house')->nullable();  // Optional land or house details
            $table->timestamps();  // Created and updated timestamps
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('first_salary_returns');
    }
};
