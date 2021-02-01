<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'                  => 'Admin',
            'email'                 => 'admin@test.com',
            'password'              => bcrypt('admin@secret'),
            'email_verified_at'     => Carbon::now()->timestamp,
        ]);
    }
}
