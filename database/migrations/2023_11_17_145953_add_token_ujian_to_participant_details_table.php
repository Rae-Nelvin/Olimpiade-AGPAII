<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTokenUjianToParticipantDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_details', function (Blueprint $table) {
            $table->string('token_ujian')->nullable()->after('foto_bukti_pembayaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('participant_details', function (Blueprint $table) {
            $table->dropColumn('token_ujian');
        });
    }
}
