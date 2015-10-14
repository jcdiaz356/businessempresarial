<?php

use Businessempresarial\Edition;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
//use Laracasts\TestDummy\Factory as TestDummy;

class EditionsTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');

        DB::table('editions')->delete();
        Edition::create(['number' => 423,
            'name' => 'EDICIÓN 423',
            'description' => "EDICIÓN 423 DE BUSINESS EMPRESARIAL DEL 12  AL 18 DE OCTUBRE DEL 2015",
            'state' => 1]);
    }
}
