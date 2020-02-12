<?php

use Illuminate\Database\Seeder;
use App\Agents;
class AgentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Agents::class, 30)->create();
    }
}
