<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $boardRepository = new \App\Repositories\Board\BoardRepository;
        $taskRepository = new \App\Repositories\Task\TaskRepository;

        $this->app
            ->when(\App\Services\Board\BoardService::class)
            ->needs(\App\Contracts\Board\BoardRepository::class)
            ->give(function () use ($boardRepository) {
                return $boardRepository;
            });

        $this->app
            ->when(\App\Services\Task\TaskService::class)
            ->needs(\App\Contracts\Task\TaskRepository::class)
            ->give(function () use ($taskRepository) {
                return $taskRepository;
            });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
