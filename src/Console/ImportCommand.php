<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Console;

use Illuminate\Console\Command;

class ImportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = <<<'CMD'
        email-sync:import
            {--prune : Exactly copy Google Groups, removing all non-existing email lists}
            {--dry-run : Only compare the lists, don't make any changes}
        CMD;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Imports all existing Google Groups as email lists';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->alert('TODO');

        return Command::SUCCESS;
    }
}
