<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class peminjaman extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'buku_id',
        'tanggalpeminjaman',
        'tanggalpengembalian',
        'statuspeminjaman',
    ];

    protected $table = 'peminjaman';

    public function buku(){
        return $this->belongsTo(Book::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }
}
