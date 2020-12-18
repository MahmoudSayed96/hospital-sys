<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('site_name')->default('Hospital');
            $table->string('site_email');
            $table->string('site_phone')->nullable();
            $table->string('site_telephone')->nullable();
            $table->string('site_fax')->nullable();
            $table->string('site_logo')->nullable();
            $table->text('site_address')->nullable();
            $table->date('stablish_date');
            $table->string('site_facebook')->nullable();
            $table->string('site_twitter')->nullable();
            $table->string('site_instagram')->nullable();
            $table->enum('status',[0, 1])->default(1);
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
        Schema::dropIfExists('settings');
    }
}
