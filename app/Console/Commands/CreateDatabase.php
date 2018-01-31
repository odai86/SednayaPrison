<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CreateDatabase extends Command
{

  protected $name = "make:database";
  protected function getArguments()
{
    return [
        ['name', InputArgument::REQUIRED, 'The name of the database'],
    ];
}
public function fire()
{
    DB::getConnection()->statement('CREATE DATABASE :schema', ['schema' => $this->argument('name')]);
}
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        //
    }
}
