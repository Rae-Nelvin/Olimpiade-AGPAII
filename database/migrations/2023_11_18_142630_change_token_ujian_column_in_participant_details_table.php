<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeTokenUjianColumnInParticipantDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('participant_details', function (Blueprint $table) {
            $table->dropColumn('token_ujian');
            // $table->renameColumn('token_ujian', 'username_ujian');
            $table->string('username_ujian')->after('foto_bukti_pembayaran')->nullable();
            $table->string('password_ujian')->after('username_ujian')->nullable();
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
            $table->dropColumn('username_ujian');
            $table->string('token_ujian')->after('foto_bukti_pembayaran')->nullable();
            // $table->renameColumn('username_ujian', 'token_ujian');
            $table->dropColumn('password_ujian');
        });
    }
}
