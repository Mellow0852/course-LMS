<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Validation\Rules\Unique;

class CreateDocketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dockets', function (Blueprint $table) {
            $table->id();
            $table->string('fullname');
            $table->string('surname');
            $table->string('identitynumber');
            $table->string('postaladdress');
            $table->string('postalcode');
            $table->string('telephonenumber');
            $table->string('faxnumber');
            $table->string('emailaddress')->unique();
            $table->string('p_fullname');
            $table->string('p_surname');
            $table->string('p_capacity');
            $table->text('d_record');
            $table->string('d_reference')->nullable();
            $table->string('e_payment');
            $table->string('disability');
            $table->string('formrequired')->nullable();
            $table->text('g_signed_at')->nullable();
            $table->string('g_on_this');
            $table->string('g_day_of');
            $table->integer('g_20');
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
        Schema::dropIfExists('dockets');
    }
}
