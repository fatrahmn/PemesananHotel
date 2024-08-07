<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    protected $table = 'kamar';

    protected $fillable = [
        'id_kamar',
        'nama_kamar',
        'jenis_kamar',
        'ukuran_kamar',
        'harga',
    ];
    
    protected $primaryKey = 'id_kamar';

}
