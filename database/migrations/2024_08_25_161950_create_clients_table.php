<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('client_name');
            $table->string('company_title');
            $table->string('phone');
            $table->string('mobile')->nullable();  // Kolom tambahan
            $table->string('fax')->nullable();     // Kolom tambahan
            $table->string('email');
            $table->string('secondary_email')->nullable();  // Kolom tambahan
            $table->string('address');
            $table->string('city');
            $table->string('postal_code')->nullable();  // Kolom tambahan
            $table->string('country')->nullable();      // Kolom tambahan
            $table->string('contact_person')->nullable();
            $table->string('website')->nullable();
            $table->string('industry')->nullable();
            $table->string('registration_number')->nullable();  // Kolom tambahan
            $table->string('tax_number')->nullable();           // Kolom tambahan
            $table->string('legal_status')->nullable();         // Kolom tambahan
            $table->string('client_type')->nullable();          // Kolom tambahan
            $table->string('preferred_contact_method')->nullable(); // Kolom tambahan
            $table->string('status')->default('active');       // Kolom tambahan
            $table->text('notes')->nullable();
            $table->string('billing_address')->nullable();     // Kolom tambahan
            $table->string('billing_email')->nullable();       // Kolom tambahan
            $table->unsignedBigInteger('created_by')->nullable();  // Kolom tambahan
            $table->unsignedBigInteger('updated_by')->nullable();  // Kolom tambahan
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
