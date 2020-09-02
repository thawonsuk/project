<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $user = new \App\User();
        $user->name = 'Wongsakon Thawonsuk';
        $user->email = 'thawonsuk@hotmail.com';
        $user->password = Hash::make('123456789');
        $user->save();
    }
}
