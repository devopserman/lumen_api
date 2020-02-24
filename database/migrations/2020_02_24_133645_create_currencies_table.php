<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCurrenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('currencies', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('currencies', function (Blueprint $table) {
            Schema::create('currencies', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->string('name');
                $table->string('english_name');
                $table->string('alphabetic_code')->unique;
                $table->integer('digit_code')->unique;
                $table->decimal('rate', 10, 4)->default(0);
                $table->timestamps();
            });
        });
    }
}
