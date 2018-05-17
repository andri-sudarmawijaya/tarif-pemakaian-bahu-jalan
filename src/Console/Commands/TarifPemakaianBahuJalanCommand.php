<?php namespace Bantenprov\TarifPemakaianBahuJalan\Console\Commands;

use Illuminate\Console\Command;

/**
 * The TarifPemakaianBahuJalanCommand class.
 *
 * @package Bantenprov\TarifPemakaianBahuJalan
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class TarifPemakaianBahuJalanCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:tarif-pemakaian-bahu-jalan';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\TarifPemakaianBahuJalan package';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Welcome to command for Bantenprov\TarifPemakaianBahuJalan package');
    }
}
