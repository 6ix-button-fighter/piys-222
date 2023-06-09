<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Console\Commands\GetCategoryCodeCommand;
use App\Console\Commands\ShowCategoryProductsCommand;
use App\Console\Commands\ShowProductsCommand;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }

    protected $commands = [
        // Другие команды
        Commands\ShowCategoryProductsCommand::class,
    ];

    protected $commands = [
        // Другие команды
        Commands\GetCategoryCodeCommand::class,
    ];

    protected $commands = [
        // Другие команды
        Commands\ShowProductCommand::class,
    ];
}
