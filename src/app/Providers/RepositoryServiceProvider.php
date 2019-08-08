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

        $this->app
            ->when(\App\Services\Board\BoardService::class)
            ->needs(\App\Contracts\Board\BoardRepository::class)
            ->give(function () use ($boardRepository) {
                return $boardRepository;
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
