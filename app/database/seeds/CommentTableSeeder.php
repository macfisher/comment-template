<?php

//app/database/seeds/CommentTableSeeder.php

class CommentTableSeeder extends Seeder {
	
	public function run() {
		
		DB::table('comments')->delete();
		
		Comment::create(array(
			'author' => 'Mac Fisher',
			'text' => 'Mac\'s test comment.'
		));
		
		Comment::create(array(
			'author' => 'Zodd',
			'text' => 'Bow down!'
		));
		
		Comment::create(array(
			'author' => 'Iron Oak',
			'text' => 'MIGHTY SEED!'
		));
	}
}
