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
        Schema::create('attends', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->nullable();
            $table->foreignID('student_id')->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('attends', function(Blueprint $table){
            $table->dropForeign('attends_student_id_foreign');

        });
        Schema::dropIfExists('attends');
    }
};
