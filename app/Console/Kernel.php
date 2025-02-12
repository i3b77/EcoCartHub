<?php

namespace App\Console;

use App\Jobs\SendOffersJob;
use App\Jobs\EmailDueNotification;
use App\Models\Task;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Models\User;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->command('custom:query')->everyFiveSeconds();
        // $schedule->job(new SendOffersJob)->everyFiveSeconds();
        // $schedule->command('send:offers')->everyFiveMinutes();
        // $schedule->command('task:watcher')->everyFiveSeconds();
        // $schedule->job(new EmailDueNotification)->everyFiveSeconds();
        // $schedule->command('upcoming:task')->everyFiveSeconds();
        $schedule->command('completed:tasks')->everyFiveSeconds();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
