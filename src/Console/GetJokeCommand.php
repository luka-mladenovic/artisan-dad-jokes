<?php

namespace DadJokes\Console;

use DadJokes\Jokes;
use Illuminate\Console\Command;

class GetJokeCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dadjoke';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Return a dad joke';

    /**
     * Jokes collection.
     *
     * @var DadJokes\Jokes
     */
    protected $jokes;

    /**
     * Constructor
     *
     * @param DadJokes\Jokes $jokes
     */
    public function __construct(Jokes $jokes)
    {
        parent::__construct();

        $this->jokes = $jokes;
    }

    /**
     * Execute the command.
     *
     * @return void
     */
    public function handle()
    {
        $this->comment(
            $this->jokes->get()
        );
    }
}
