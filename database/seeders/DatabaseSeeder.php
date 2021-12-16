<?php

namespace Database\Seeders;

use App\Models\Gift;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * Uses the gift factory to create a random number of gifts. 
     * Each time a gift is created, the guest factory will insert a corresponding record in the guests table.
     * @return void
     */
    public function run()
    {
        Gift::factory(35)->create();
    }
}
