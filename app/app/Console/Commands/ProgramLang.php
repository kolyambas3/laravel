<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class ProgramLang extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'quest:lang';

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
        $language = $this->choice('Which language do you prefer?', [
            'PHP',
            'Ruby',
            'Python',
            'Go',
            'JS'
        ]);

        $this->line("You prefer {$language}");
    }
}
