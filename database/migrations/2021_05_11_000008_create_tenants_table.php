<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTenantsTable extends Migration
{
    public function up()
    {
        Schema::create('tenants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name')->nullable();
            $table->string('gender');
            $table->string('department')->nullable();
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('id_type');
            $table->integer('id_number')->unique();
            $table->string('home_address_line_1')->nullable();
            $table->string('home_address_line_2')->nullable();
            $table->string('emergency_person_name');
            $table->string('emergency_person_phone_number_1');
            $table->string('emergency_person_phone_number_2')->nullable();
            $table->string('status');
            $table->longText('extra_note')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
