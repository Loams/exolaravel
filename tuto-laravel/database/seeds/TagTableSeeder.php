<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class TagTableSeeder extends Seeder
{
	private function randDate()
	{
		return Carbon::CreateFromDate(null, rand(1,12), rand(1,28));
	}
	
	public function run()
	{
		DB::table('tags')->delete();
		for($i=0; $i<20; ++$i)
		{
			$date = $this->randDate();
			DB::table('tags')->insert([
			'tag' => 'tag ' . $i,
			'tag_url' => 'tag-' . $i,
			'created_at' => $date,
			'updated_at' => $date,
			]);
		}
	}
}