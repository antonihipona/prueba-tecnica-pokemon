<?php

namespace App\Console\Commands;

use App\Models\Pokemon;
use Illuminate\Console\Command;

class LoadPokedex extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:load-pokedex';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Loads the pokedex from a CSV file.';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Check if the pokedex table is empty
        if (Pokemon::count() > 0) {
            $this->error('The pokedex table is not empty. Aborting.');
            return;
        }

        // Load the CSV file
        $file = fopen(database_path('seeders/pokemon.csv'), 'r');
        if ($file === false) {
            $this->error('The pokedex.csv file does not exist. Aborting.');
            return;
        }

        // Read the CSV file
        $header = fgetcsv($file);
        while (($row = fgetcsv($file)) !== false) {
            $pokemon = [
                'number' => $row[0],
                'name' => $row[1],
                'type1' => $row[2],
                'type2' => $row[3] ?: null,
                'total' => $row[4],
                'hp' => $row[5],
                'attack' => $row[6],
                'defense' => $row[7],
                'sp_atk' => $row[8],
                'sp_def' => $row[9],
                'speed' => $row[10],
                'generation' => $row[11],
                'legendary' => $row[12] === 'True',
            ];
            Pokemon::create($pokemon);
        }

        $this->info('The pokedex has been loaded.');
    }
}
