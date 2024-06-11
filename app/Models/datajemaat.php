<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datajemaat extends Model
{
    use HasFactory;
    protected $table =('datajemaats');
    
    protected $fillable = [
        'namakeluarga',
        'sektor',
        'alamat',
        // daftar atribut lain yang dapat diisi secara massal
    ];

    public function keluarga(){
        return $this->belongsTo((datakeluarga::class));
    }
}
