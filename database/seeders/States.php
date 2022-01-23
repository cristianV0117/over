<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class States extends Seeder
{
    private $data = [
        [
            "state" => "deshabilitado",
            "code"  => 0
        ],
        [
            "state" => "activo",
            "code"  => 1
        ],
        
        [
            "state" => "bloqueado",
            "code"  => 2
        ],
        [
            "state" => "denegado",
            "code"  => 3
        ]
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->data as $key => $value ) {
            DB::table('states')->insert([
                'state'      => $value["state"],
                'code'       => $value["code"],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
