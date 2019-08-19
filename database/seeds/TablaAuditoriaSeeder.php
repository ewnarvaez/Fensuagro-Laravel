<?php

use App\Models\Auditoria;
use Illuminate\Database\Seeder;

class TablaAuditoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Auditoria::class)->times(3)->create();
    }
}
