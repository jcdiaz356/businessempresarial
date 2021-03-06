<?php

use Businessempresarial\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');

		$this->call(CategoriesTableSeeder::class);
		$this->command->info('User table seeded!');
		$this->call(EditionsTableSeeder::class);
//		$this->command->info('User table seeded!');
		Model::reguard();
	}

}

