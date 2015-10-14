<?php

use Businessempresarial\Category;
use Illuminate\Database\Seeder;

// composer require laracasts/testdummy
//use Laracasts\TestDummy\Factory as TestDummy;

class CategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // TestDummy::times(20)->create('App\Post');
        DB::table('categories')->delete();
        Category::create(['name' => 'empresas & negocios',
                        'order' => 1,
                        'state' => 1]);
        Category::create(['name' => 'lanzamientos',
                        'order' => 2,
                        'state' => 1]);
        Category::create(['name' => 'entrevista',
                        'order' => 3,
                        'state' => 1]);
        Category::create(['name' => 'casos de exito',
                        'order' => 4,
                        'state' => 1]);
        Category::create(['name' => 'articulo',
                        'order' => 5,
                        'state' => 1]);
        Category::create(['name' => 'productos premium',
                        'order' => 6,
                        'state' => 1]);
        Category::create(['name' => 'turismo & gastronomia',
                        'order' => 7,
                        'state' => 1]);
        Category::create(['name' => 'Editorial',
                        'order' => 8,
                        'state' => 1]);
        Category::create(['name' => 'Movida Empresarial',
                        'order' => 9,
                        'state' => 1]);
        Category::create(['name' => 'Agenda y Publicaciones',
                        'order' => 10,
                        'state' => 1]);
        Category::create(['name' => 'Social de la semana',
                        'order' => 11,
                        'state' => 1]);
        Category::create(['name' => 'Edición Impresa',
                        'order' => 12,
                        'state' => 1]);
        Category::create(['name' => 'Ediciones Anteriores',
                        'order' => 13,
                        'state' => 1]);

    }
}
