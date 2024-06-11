<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datakeluarga extends Model
{
    use HasFactory;
    protected $table ='datakeluargas';
    
    protected $fillable = [
        'datajemaat_id',
        'namaayah',
        'namaibu',
        'namaanak',
        // daftar atribut lain yang dapat diisi secara massal
    ];
    public function jemaat(){
        return $this->belongsTo((datajemaat::class));
    }
}
