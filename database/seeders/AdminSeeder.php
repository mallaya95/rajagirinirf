<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\Role;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $data = [
            'name' => 'Administrator',
            'email' => 'admin@rajagiri.edu',
            'password' => 'admin@123',
            'role_id' => Role::where('name', 'admin')->first()->id,
           
        ];

        $user = User::create($data);

        $user->assignRole('admin');
    }
}
