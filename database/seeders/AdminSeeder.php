<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate([
            'email' => 'viviveronica690@gmail.com',
        ], 
        [
            'name' => 'Veronica Vivian',
            'password' => Hash::make('VivianBooks@123'),
            'is_admin' => true,
        ]);
    }
}
