<?php

namespace App\Models;

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class role extends Model
{
    use HasFactory;
    public function run()
    {
        Schema::disableForeignKeyCostraints();
        Role::truncate();
        Schema::enebleForeignKeyCostraints();

        $data = [
            'admin','client'
        ];

        foreach ($data as $value) {
            Role::insert([
                'nama' => $value
            ]);
        }
    }
}
