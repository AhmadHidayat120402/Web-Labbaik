<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rapat extends Model
{
    use HasFactory;
    // protected $fillable = ['agenda_rapat', 'tanggal_rapat', 'tempat_rapat', 'jumlah_yang _hadir', 'jumlah_yang_tidak_hadir', 'hasil_rapat', 'note', 'foto'];
    protected $guarded = ['id'];
}
