<?php

namespace App\Providers;

use App\Billing\BankPayementGateway;
use App\Billing\CreditPayementGateway;
use App\Billing\PayementGateway;
use App\Billing\PayementGatewayContract;
use App\Channel;
use App\Http\View\Composers\ChannelsComposer;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PayementGatewayContract::class, function ($app){

            if(request()->has('credit')){
                return new CreditPayementGateway('eur');
            }

            return new BankPayementGateway('eur');

        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        //option 1 - Every single view
        //View::share('channels', Channel::orderBy('name')->get());

        //option 2 - Granular views whith wildcards
        //view()->composer( ['post.*','channel.index'], function ($view) {
        //$view->with('channels', Channel::orderBy('name')->get());

  
        //});

        //option 3 - dedicated Class
        View::composer('partials.channels.*', ChannelsComposer::class   );

    }
}
