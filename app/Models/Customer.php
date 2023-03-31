<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customer'; 
    protected $fillable = [
        'nama',
        'alamat',
        'status',
        'agama',
        'tg_lahir',
        
    ];
    // public function kategori()
    // {
    //     return $this->belongsTo(Kategori::class);
    // }
}
