<?php

use Illuminate\Database\Seeder;

class carticlestableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\carticle::class,30)->create();
    }
}
