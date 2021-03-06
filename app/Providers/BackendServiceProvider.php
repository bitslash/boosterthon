<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class BackendServiceProvider extends ServiceProvider
{
    /**
     * register the interface binding
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\ReviewRepositoryInterface', function() {
            $model = new \App\Review();
            return new \App\Repositories\DBReviewRepository($model);
        });

        $this->app->bind('App\Repositories\FundraiserRepositoryInterface', function() {
            $model = new \App\Fundraiser();
            return new \App\Repositories\DBFundraiserRepository($model);
        });
    }
}
