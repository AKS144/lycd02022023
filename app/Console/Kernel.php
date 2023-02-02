<?php



namespace App\Console;



use Illuminate\Console\Scheduling\Schedule;

use Illuminate\Foundation\Console\Kernel as ConsoleKernel;



class Kernel extends ConsoleKernel

{

    /**

     * The Artisan commands provided by your application.

     *

     * @var array

     */

    protected $commands = [

        Commands\Expiry::class,

    ];



    /**

     * Define the application's command schedule.

     *

     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule

     * @return void

     */

    protected function schedule(Schedule $schedule)

    {

        // $schedule->command('inspire')

        //          ->hourly();

        //->dailyAt('13:00');

        //$schedule->command('JobDelete')->everyMinute();

        $schedule->command('JobDelete')->dailyAt('11:28');

        //$schedule->command('Expiry')->everyMinute();

        $schedule->command('Expiry')->dailyAt('11:28');

        $schedule->command('Notify')->dailyAt('11:28');

        $schedule->command('Suspend')->dailyAt('11:28');

        $schedule->command('WalletExpiry')->dailyAt('10:27');

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

}

