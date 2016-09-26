<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->delete();
		for($i=0; $i<10; ++$i)
		{
			DB::table('users')->insert([
			'name' => 'nom' . $i,
			'email' => 'email' . $i .'@blog.fr',
			'password' => bcrypt('password' . $i),
			'admin' => rand(0,1),
			]);
		}
	}
}
