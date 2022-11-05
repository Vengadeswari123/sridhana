<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masters', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('level')->default(0);
            $table->unsignedBigInteger('type')->default(0);
            $table->string('name')->nullable();
            $table->json('data')->nullable();
            $table->unsignedSmallInteger('status')->default(0);
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
        Schema::dropIfExists('masters');
    }
};

//0 - District
//1 - Allied Activity
//2 - Bank
//3 - Caste Category

//5 - Qualification
//6 - Relationship
//7 - Religion
//8 - User Type
//9 - Branch
//10 - Caste
//11 - Taluk
//12 - Village
//13 - Hamlet
//14 - Fishing Area
//15 - Society
//16 - Assembly Constituency
//17 - Vessel Category
//18 - Type of Vessel
//19 - Hull Material
//20 - Insurance Company


//23 - Types of Gear
//24 - Life Saving Equipment
//25 - Navigation Equipment
//26 - Communication Equipments - Manufacturing Company
//27 - Communication Equipments
//28 - Subsidy - Boat
//29 - Engine Make

