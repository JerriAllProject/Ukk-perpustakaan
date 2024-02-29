<?php

namespace Database\Seeders;

use App\Models\role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Schema::disableForeignKeyConstraints();
        // role::truncate();
        // Schema::enableForeignKeyConstraints();

        // $data = [
        //     'admin','client'
        // ];

        // foreach ($data as $value) {
        //     role::insert([
        //         'nama' => $value
        //     ]);
        // }
            $pass = Hash::make('123');
        User::create([
            'username' => 'admin',
            'password' => $pass,
            'email' =>'admin@gmail.com',
            'namalengkap' =>'admin',
            'alamat' => 'pgk',
            'status' => 'active',
            'role_id'  =>1
        ]);
    }
}
