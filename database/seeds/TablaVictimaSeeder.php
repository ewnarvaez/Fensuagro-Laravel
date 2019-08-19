<?php

use App\Models\Victima;
use Illuminate\Database\Seeder;

class TablaVictimaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Victima::class)->times(20)->create();
    }
}
