<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->truncateTable([
            'auditoria',
            'denuncia',
            'entidad',
            'organizacionsocial',
            'testigo',
            'usuario',
            'rol',
            'victima',
            'victimario',
            'informacion'
        ]);
        /* $this->call(TablaVictimaSeeder::class);
        $this->call(TablaVictimarioSeeder::class);
        $this->call(TablaInformacionSeeder::class); */
    }

    protected function truncateTable(array $tablas){
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        foreach ($tablas as $tabla){
            DB::table($tabla)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
