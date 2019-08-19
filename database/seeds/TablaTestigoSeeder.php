<?php

use App\Models\Testigo;
use Illuminate\Database\Seeder;

class TablaTestigoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Testigo::class)->times(10)->create();
    }
}
