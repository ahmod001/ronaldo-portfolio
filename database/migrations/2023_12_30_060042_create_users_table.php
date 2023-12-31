<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('phone', 50);

            $table->string('img_url', 100);
            $table->string('website_url', 100);

            $table->string('profession', 50);
            $table->string('date_of_birth', 50);
            $table->string('short_description', 200);
            
            $table->string('address', 100);
            $table->bigInteger('zip_code');


            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
