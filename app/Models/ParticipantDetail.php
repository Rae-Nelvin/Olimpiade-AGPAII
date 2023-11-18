<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParticipantDetail extends Model
{
    use HasFactory;

    public $table = 'participant_details';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'nisn',
        'asal_sekolah',
        'foto_kartu_pelajar',
        'foto_bukti_pembayaran',
        'username_ujian',
        'password_ujian',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
