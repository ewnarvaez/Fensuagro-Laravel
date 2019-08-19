<?php

use App\Models\Entidad;
use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Report\Html\Facade;

class TablaEntidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Entidad::class)->times(10)->create();
    }
}
