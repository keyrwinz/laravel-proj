<?php

use Illuminate\Database\Seeder;

class emailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\email::class, 10)->create();
    }
}
