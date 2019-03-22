<?php
namespace DadJokes;

use DadJokes\Jokes;
use DadJokes\Console\GetJokeCommand;
use Illuminate\Support\ServiceProvider;

class DadJokesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('dadjoke', function ($app) {
            return new GetJokeCommand(new Jokes);
        });

        $this->commands('dadjoke');
    }
}
