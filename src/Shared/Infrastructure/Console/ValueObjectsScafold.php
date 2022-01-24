<?php

declare(strict_types=1);

namespace Src\Shared\Infrastructure\Console;

use Illuminate\Console\Command;

class ValueObjectsScafold extends Command
{
    protected $types = [
        "varchar" => "string",
        "int" => "int",
        "double" => "int"
    ];

    protected $signature = 'generate:domain { entity }';

    protected $description = 'Command description';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $this->info("Inicio: ". Carbon::now()->toDateTimeString());
    }
}
