<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('resumePhoto');
            $table->string('namePrefix');
            $table->string('firstName', 50);
            $table->string('lastName', 50);
            $table->string('email', 50);
            $table->string('phoneNumber', 10);
            $table->string('birthday');
            $table->integer('yearOld');
            $table->string('university');
            $table->string('faculty');
            $table->string('branch');
            $table->string('gpa');
            $table->string('educational');
            $table->string('experience');
            $table->longText('dominantLanguage');
            $table->longText('languageLearned');
            $table->longText('charisma');
            $table->string('nameVillage');
            $table->string('homeNumber');
            $table->string('alley');
            $table->string('road');
            $table->string('district');
            $table->string('canton');
            $table->string('province');
            $table->string('postalCode');
            $table->string('myNameVillage');
            $table->string('myHomeNumber');
            $table->string('myAlley');
            $table->string('myRoad');
            $table->string('myDistrict');
            $table->string('myCanton');
            $table->string('myProvince');
            $table->string('myPostalCode');
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
        Schema::dropIfExists('histories');
    }
}
