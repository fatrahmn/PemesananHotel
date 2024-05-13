<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';

    protected $fillable = [
        'id_reservasi',
        'customer_id',
        'tanggal',
        'tanggal_masuk',
        'tanggal_keluar',
        'id_hotel'
    ];
    
    protected $primaryKey = 'id_reservasi';

}
