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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->string('session');
            $table->string('type');
            $table->integer('mark');
            $table->foreignId('student_id')->nullable()->constrained();
            $table->foreignId('subject_id')->nullable()->constrained();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('marks', function(Blueprint $table){
            $table->dropForeign('marks_student_id_foreign');
            $table->dropForeign('marks_subject_id_foreign');

        });
        Schema::dropIfExists('marks');
    }
};
