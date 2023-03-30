<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // public $table = [];

    // public function allKategoris()

    protected $table = 'kategori';

    protected $fillable = [
        'nama',
        'deskripsi',
    ];

}
