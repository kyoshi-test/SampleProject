<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Libs\MasterDataService;

class GenerateMasterData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:generate_master_data {version}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate master data -version';

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
        $version = $this->argument("version");
		MasterDataService::GenerateMasterData($version);
    }
}
