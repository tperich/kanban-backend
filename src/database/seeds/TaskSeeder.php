<?php

use App\Models\Task\Task;

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the task seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Task::class, 10)->create();
    }
}
