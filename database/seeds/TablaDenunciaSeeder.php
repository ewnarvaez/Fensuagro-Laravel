<?php

use App\Models\Denuncia;
use Illuminate\Database\Seeder;

class TablaDenunciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Denuncia::class)->times(10)->create();
    }
}
