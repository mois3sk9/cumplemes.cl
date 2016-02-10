<?php


use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductosSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('productos')->delete();

		DB::table('productos')->insert([
				'nombre' => 'Caja bombones',
				'descripcion' => 'Manualidades del sur',
				'precio' => 3000, 
				'codigo' => '099909',
				'tipo_id' => 1
		]);
		DB::table('productos')->insert([
				'nombre' => 'Regalo kawaii',
				'descripcion' => 'regalo muy kawaii',
				'precio' => 8000,
				'codigo' => '109009',
				'tipo_id' => 2
		]);
		DB::table('productos')->insert([
				'nombre' => 'Figurita',
				'descripcion' => 'Figuritas kawaii',
				'precio' => 7000,
				'codigo' => '0989023',
				'tipo_id' => 3
		]);
	}
}
