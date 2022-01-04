<?php

namespace Database\Seeders;

use App\Models\AccessLevel;
use Illuminate\Database\Seeder;

class AccessLevelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        /**
         * @var string[]
         */
        $levels = explode(',', 'Administrador,Cliente');

        collect($levels)->map(function ($item) {

            $level = new AccessLevel();

            $level->label = $item;

            $level->save();

        });

    }
}
