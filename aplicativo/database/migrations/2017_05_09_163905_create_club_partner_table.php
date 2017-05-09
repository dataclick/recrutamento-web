<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClubPartnerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('club_partner', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('club_id');
            $table->unsignedInteger('partner_id');
            $table->foreign('club_id')->references('id')->on('clubs');
            $table->foreign('partner_id')->references('id')->on('partners');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('club_partner');
    }
}
