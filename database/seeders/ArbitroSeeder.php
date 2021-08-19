<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Arbitro;

class ArbitroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Arbitro::create(['persona_id'=>40]);
        Arbitro::create(['persona_id'=>41]);
        Arbitro::create(['persona_id'=>42]);
        Arbitro::create(['persona_id'=>43]);
        Arbitro::create(['persona_id'=>44]);
        Arbitro::create(['persona_id'=>45]);
    }
}
