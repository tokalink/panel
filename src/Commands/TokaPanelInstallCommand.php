<?php

namespace Tokalink\Panel\Commands;

use Illuminate\Console\Command;

class TokaPanelInstallCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'panel:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(): void
    {
        $this->info('TokaPanelInstallCommand handle');
    }
}
