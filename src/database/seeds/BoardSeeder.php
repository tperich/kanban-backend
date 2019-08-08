<?php

use App\Models\Board\Board;

use Illuminate\Database\Seeder;

class BoardSeeder extends Seeder
{
    /**
     * Run the board seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Board::class)->create();
    }
}
