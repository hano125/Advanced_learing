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
        Schema::create('study_infos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("user_id");
            $table->unsignedBigInteger("university_id");
            $table->unsignedBigInteger("college_id");
            $table->unsignedBigInteger("department_id");
            $table->string("rate");
            $table->string("rank");
            $table->foreign("user_id")->references("id")->on("users");
            $table->foreign("university_id")->references("university_id")->on("universities");
            $table->foreign("college_id")->references("college_id")->on("colleges");
            $table->foreign("department_id")->references("department_id")->on("departments");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_infos');
    }
};
