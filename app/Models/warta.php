<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class warta extends Model
{
    use HasFactory;
  //  protected $guarded = [];
    protected $fillable =[
        'judul',
        'keterangan',
        'tanggal',
    ];
}