<?php

namespace App\Containers\Game\Data\Seeders;

use App\Ship\Parents\Seeders\Seeder;
use Illuminate\Support\Facades\DB;

class GameSeeder extends Seeder
{
    public function run()
    {
      DB::table('games')->insert([
        'title'         => 'Magic maze',
        'description'   => 'jeux cooperatif',
        'ean'           => '3683080182971',
      ]);
      DB::table('games')->insert([
        'title'         => 'Bazar bizarre',
        'description'   => 'jeux enfant',
        'ean'           => '3421272106011',
      ]);
      DB::table('games')->insert([
        'title'         => 'Not alone',
        'description'   => 'jeux stratégie',
        'ean'           => '3770005193027',
      ]);
    }
}
