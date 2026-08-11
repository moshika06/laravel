<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class studentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // student::insert([
        //     [
        //         'name' => 'rhinoy',
        //         'email' => 'r@gmail.com',
        //         'phone' => '081219747375',
        //         'address' => 'airud',
        //     ],
        //     [
        //         'name' => 'rhinoy',
        //         'email' => 'r@gmail.com',
        //         'phone' => '081219747375',
        //         'address' => 'airud',
        //     ],
        // ]);

        student::factory(50)->create();
    }
}
