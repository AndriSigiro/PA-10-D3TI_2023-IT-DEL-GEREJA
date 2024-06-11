<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelayan extends Model
{
    use HasFactory;
    protected $fillable =[
        'nama',
        'photo'
    ];
    protected $table = 'pelayan';
}
