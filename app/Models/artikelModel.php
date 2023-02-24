<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class artikelModel extends Model
{
    use HasFactory;
    protected $table = 'artikel';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id', 'judul', 'slug', 'gambar', 'konten', 'idKategori',
        'author', 'tgl_publish'
    ];
    public function kategori()
    {
        return $this->belongsTo(kategoriModel::class, 'idKategori');
    }
}
