<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // User::delete();
         $array = array(
             'name'     => 'Saif Ali',
             'email'    => 'saif.052263@gmail.com',
             'password' => Hash::make('Saif@123')
         );
        User::create($array);

    }
}
