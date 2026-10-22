<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuKantin extends Model
{
    use HasFactory;
    protected $fillable = [
        'kode_menu',
        'nama_menu',
        'kategori',
        'harga',
        'stok',
        'status',
        'keterangan'
    ];

    protected $casts = [
        'harga' => 'decimal:2',
    ];
}
