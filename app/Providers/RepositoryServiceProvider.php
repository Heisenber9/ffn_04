<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App;
use App\Repositories\Player\PlayerRepositoryInterface;
use App\Repositories\Player\PlayerRepository;
use App\Repositories\Team\TeamRepositoryInterface;
use App\Repositories\Team\TeamRepository;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Repositories\League\LeagueRepositoryInterface;
use App\Repositories\League\LeagueRepository;
use App\Repositories\Season\SeasonRepositoryInterface;
use App\Repositories\Season\SeasonRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('layout', 'layout.layout');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind(PlayerRepositoryInterface::class, PlayerRepository::class);
        App::bind(TeamRepositoryInterface::class, TeamRepository::class);
        App::bind(UserRepositoryInterface::class, UserRepository::class);
        App::bind(LeagueRepositoryInterface::class, LeagueRepository::class);
        App::bind(SeasonRepositoryInterface::class, SeasonRepository::class);
    }
}
