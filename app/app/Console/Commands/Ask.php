<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Ask extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quest:ask';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle():void
    {
        if ($this->confirm('Do you wish to continue?')) {
            $this->info("It's continue");
        }
    }
}
