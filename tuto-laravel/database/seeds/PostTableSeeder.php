<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostTableSeeder extends Seeder
{
	private function randDate()
	{
		return Carbon::CreateFromDate(null, rand(1,12), rand(1,28));
	}
	
	public function run()
	{
		DB::table('posts')->delete();
		for($i=0; $i<100; ++$i)
		{
			$date = $this->randDate();
			DB::table('posts')->insert([
			'titre' => 'Titre' . $i,
			'contenu' => 'Contenu ' . $i .' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed orci orci, eleifend et aliquet efficitur, euismod nec nisi. Aliquam interdum massa at erat pharetra, et gravida ex faucibus. Integer a mattis nisi, hendrerit pulvinar nibh. In dignissim laoreet ligula, vitae ullamcorper ante tincidunt vel. Suspendisse fermentum malesuada semper. Pellentesque mollis eros sed odio commodo placerat. Praesent nec ex lacinia, venenatis urna quis, vestibulum tortor. Nullam in diam cursus, aliquam sapien ac, facilisis ipsum. Sed turpis tortor, blandit sed maximus sed, dignissim sed risus. Sed fermentum lacinia maximus. Donec accumsan mattis mi, eget molestie magna volutpat sit amet. Proin quis massa ligula. Aenean metus metus, pellentesque sit amet erat bibendum, egestas varius augue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In mauris sapien, condimentum ac tellus ac, volutpat aliquam nisi. In in pellentesque sem.',
			'user_id' => rand(1,10),
			'created_at' => $date,
			'updated_at' => $date,
			]);
		}
	}
}
