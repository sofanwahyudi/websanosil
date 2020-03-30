<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
        	'name' => 'Adminwahana',
        	'email' => 'admin@wahanagumilang.co.id',
        	'password' => bcrypt('123456')
        ]);
    }
}
