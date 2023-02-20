<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin =[
            'name'  => 'Yogesh',
            'email'  => 'yogesh@latech-solutions.com',
            'password'  => bcrypt('password'),
        ];
        User::create($admin);
    }
}
