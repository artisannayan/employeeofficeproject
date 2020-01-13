<?php

namespace App\Providers;


use App\Contracts\EmpolyeeContract;
use App\Repositories\EmpolyeeRepository;
use Illuminate\Support\ServiceProvider;
class RepositoryServiceProvider extends ServiceProvider
{
    protected $repositories = [
        EmpolyeeContract::class=>EmpolyeeRepository::class,
      
    ];

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        foreach ($this->repositories as $interface => $implementation)
        {
            $this->app->bind($interface, $implementation);
        }
    }
}

