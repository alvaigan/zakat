<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Muzaqi_beras extends Model
{
    public $primaryKey = 'id_muzaqi';
    public $timestamps = false;
    protected $table = 't_muzaqi_beras';
    protected $fillable = [
      'tanggal', 'nama_muzaqi', 'rt', 'jiwa', 'jumlah_beras', 'foto'
    ];
}
