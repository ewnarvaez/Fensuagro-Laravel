<?php

use App\Models\OrganizacionSocial;
use Illuminate\Database\Seeder;

class TablaOrganizacionSocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OrganizacionSocial::class)->times(5)->create();
    }
}
