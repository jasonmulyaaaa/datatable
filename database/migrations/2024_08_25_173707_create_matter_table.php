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
        Schema::create('matters', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('client_id');
            $table->string('matter_name');
            $table->text('matter_description'); // Changed to text
            $table->string('matter_status');
            $table->string('matter_type');
            $table->string('matter_priority');
            $table->string('matter_assignee');
            $table->string('matter_reporter');
            $table->string('matter_due_date');
            $table->string('matter_start_date');
            $table->string('matter_end_date');
            $table->string('matter_tags');
            $table->text('matter_notes'); // Changed to text
            $table->text('matter_attachments'); // Changed to text
            $table->unsignedBigInteger('created_by');
            $table->unsignedBigInteger('updated_by');
            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('updated_by')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matters');
    }
};
