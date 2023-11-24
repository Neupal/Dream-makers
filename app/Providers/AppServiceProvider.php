<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Repositories\Interfaces\StandardRepositoryInterface;
use App\Repositories\StandardRepository;
use App\Repositories\Interfaces\ReachRepositoryInterface;
use App\Repositories\ReachRepository;
use App\Repositories\Interfaces\ServiceRepositoryInterface;
use App\Repositories\ServiceRepository;
use App\Repositories\Interfaces\HomeRepositoryInterface;
use App\Repositories\HomeRepository;
use App\Repositories\Interfaces\QuestionRepositoryInterface;
use App\Repositories\QuestionRepository;
use App\Repositories\Interfaces\ValueRepositoryInterface;
use App\Repositories\ValueRepository;
use App\Repositories\Interfaces\ExpertRepositoryInterface;
use App\Repositories\ExpertRepository;
use App\Repositories\Interfaces\LeadershipRepositoryInterface;
use App\Repositories\LeadershipRepository;
use App\Repositories\Interfaces\ClientRepositoryInterface;
use App\Repositories\ClientRepository;
use App\Repositories\Interfaces\IntroRepositoryInterface;
use App\Repositories\IntroRepository;
use App\Repositories\Interfaces\ConsultingRepositoryInterface;
use App\Repositories\ConsultingRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(StandardRepositoryInterface::class,StandardRepository::class);
        $this->app->bind(ReachRepositoryInterface::class,ReachRepository::class);
        $this->app->bind(ServiceRepositoryInterface::class,ServiceRepository::class);
        $this->app->bind(HomeRepositoryInterface::class,HomeRepository::class);
        $this->app->bind(QuestionRepositoryInterface::class,QuestionRepository::class);
        $this->app->bind(ValueRepositoryInterface::class,ValueRepository::class);
        $this->app->bind(ExpertRepositoryInterface::class,ExpertRepository::class);
        $this->app->bind(LeadershipRepositoryInterface::class,LeadershipRepository::class);
        $this->app->bind(ClientRepositoryInterface::class,ClientRepository::class);
        $this->app->bind(IntroRepositoryInterface::class,IntroRepository::class);
        $this->app->bind(ConsultingRepositoryInterface::class,ConsultingRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
    }
}
