<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dashboard extends Model
{
    use HasFactory;

    public function buku(){
        return $this->belongsTo(Book::class);
    }

    public function user(){
        return $this->belongsTo(user::class);
    }
}
