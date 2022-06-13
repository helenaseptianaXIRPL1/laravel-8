<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputan['name'] = 'Helena Septiana';
        $inputan['email'] = 'helenagaming1@gmail.com';
        $inputan['password'] = Hash::make('23456');
        $inputan['phone'] = '083874164706';
        $inputan['alamat'] = 'Lebak Sari rt.04 rw.05';
        $inputan['role'] = 'admin';
        User::create($inputan);
    }
}
