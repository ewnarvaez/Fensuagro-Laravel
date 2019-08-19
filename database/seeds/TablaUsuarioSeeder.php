<?php

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class TablaUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Usuario::class)->times(5)->create();
    }
}
