<?php

use App\Models\Informacion;
use Illuminate\Database\Seeder;

class TablaInformacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Informacion::class)->times(10)->create();
    }
}
