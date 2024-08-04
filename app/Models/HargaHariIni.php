<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaHariIni extends Model
{
    protected $table = 'hargahariini';

    protected $fillable = [
        'id_hotel',
        'available_room',
        'tanggal',
        'id_kamar',
    ];
    
    protected $primaryKey = 'id_hotel';

}
