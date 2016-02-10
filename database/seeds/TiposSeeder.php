<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class TiposSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('tipos')->delete();
		
		DB::table('tipos')->insert([
			'nombre' => 'Manualidad',
			'descripcion' => 'Manualidades del sur'
		]);
		DB::table('tipos')->insert([
				'nombre' => 'Chocolates',
				'descripcion' => 'todo tipo de chocolates'
		]);
		DB::table('tipos')->insert([
				'nombre' => 'Flores',
				'descripcion' => 'Todo tipo de flores'
		]);
	}
}
