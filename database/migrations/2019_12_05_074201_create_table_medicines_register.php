<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMedicinesRegister extends Migration
{
    public function up()
    {
        Schema::create('medicines_register', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('inn');
            $table->string('trade_name')->comment('Торговое название');
            $table->text('dosage_form')->comment('Лекарственная форма');
            $table->text('strength')->comment('Дозировка');
            $table->string('authorisation_status')->comment('Регистрационный статус');
            $table->date('date_of_registration')->comment('Дата регистраций');
            $table->string('manufacturer')->comment('Пройзводитель');
            $table->string('marketing_authorization_holder')->comment('Держатель регистрационнго удостовирения');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::drop('medicines_register');
    }
}
