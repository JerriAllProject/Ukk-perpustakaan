<?php

namespace App\Models;

use Database\Seeders\kategoribuku;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'penulis',
        'penerbit',
        'tahunterbit'
    ];

    protected $table = 'buku';

    /**
     * The categories that belong to the book
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function categories()
    {
        return $this->belongsToMany(Kategori::class, 'kategoribuku_relasi', 'buku_id', 'kategori_id');
    }
    // public function kategoribuku()
    // {
    //     return $this->belongsTo(Kategori::kategoribuku::class, 'book_kategori', 'buku_id', 'kategori_id');
    // }
}
