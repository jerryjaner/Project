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
        Schema::create('households', function (Blueprint $table) {
            $table->id();
           // $table->foreignId('family_profile_id')->nullable()->constrained()->onDelete('cascade')->onUpdate('cascade');

            $table->unsignedBigInteger('family_profile_id');
            $table->string('name')->nullable();
            $table->integer('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('relationship')->nullable();
            $table->string('educational_level')->nullable();
            $table->string('occupation')->nullable();
            $table->timestamps();

            $table->foreign('family_profile_id')
                  ->references('id')
                  ->on('family_profiles')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('households');
    }
};
