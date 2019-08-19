<?php

use App\Models\Victimario;
use Illuminate\Database\Seeder;

class TablaVictimarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Victimario::class)->times(15)->create();
    }
}
