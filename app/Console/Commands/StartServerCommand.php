<?php

namespace App\Console\Commands;

use Exception;
use Illuminate\Console\Command;



/**
 * Class StartServerCommand
 *
 * @category Console_Command
 * @package  App\Console\Commands
 */
class StartServerCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = "start:server";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "Start Server";


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        try {
            shell_exec("php -S localhost:8000 -t public");
        } catch (Exception $e) {
            $this->error("An error occurred");
        }
    }
}