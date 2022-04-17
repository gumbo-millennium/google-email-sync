<?php

declare(strict_types=1);

namespace Gumbo\EmailSync\Console;

use Illuminate\Console\Command;

class UpdateCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = <<<'CMD'
        email-sync:update
            {--no-remove: Ignore removed items}
            {--no-add: Ignore added items}
            {--dry-run: Only compare the lists, don't make any changes}
        CMD;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the Google Groups with the current email lists';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $this->alert('TODO');

        return Command::SUCCESS;
    }
}
