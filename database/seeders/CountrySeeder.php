<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CountrySeeder extends Seeder
{
    public function run(): void
    {
        $path = storage_path('app/countries.csv');

        if (! file_exists($path)) {
            $this->command->error('countries.csv not found in storage/app/');
            return;
        }

        $file = fopen($path, 'r');

        $header = fgetcsv($file);

        while (($row = fgetcsv($file)) !== false) {
            $data = array_combine($header, $row);

            if (! $data || empty($data['name.common']) || empty($data['cca2']) || empty($data['latlng'])) {
                continue;
            }

            [$latitude, $longitude] = array_map('trim', explode(',', $data['latlng']));

            DB::table('countries')->updateOrInsert(
                ['code' => $data['cca2']],
                [
                    'name' => $data['name.common'],
                    'official_name' => $data['name.official'] ?? null,
                    'code' => $data['cca2'],
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'region' => $data['region'] ?? null,
                    'subregion' => $data['subregion'] ?? null,
                    'flag' => $data['flag'] ?? null,
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );
        }

        fclose($file);

        $this->command->info('Countries seeded successfully.');
    }
}
