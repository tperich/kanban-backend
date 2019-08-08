<?php

use App\Models\Column\Column;

use Illuminate\Database\Seeder;

class ColumnSeeder extends Seeder
{
    /**
     * Run the column seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Column::class, 3)->create();
    }
}
