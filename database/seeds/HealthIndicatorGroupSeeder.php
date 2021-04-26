<?php

use Illuminate\Database\Seeder;
use App\Models\Health_indicator_group;

class HealthIndicatorGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $elements = [
            [
                'description' => 'Comunicacionales',
            ],
            [
                'description' => 'Visuales',
            ],
            [
                'description' => 'Movilidad',
            ],
            [
                'description' => 'Descanso',
            ],
            [
                'description' => 'Transferencias',
            ],
            [
                'description' => 'Aseo y Baño',
            ],
            [
                'description' => 'Alimentación',
            ],
            [
                'description' => 'Vestido',
            ],
            [
                'description' => 'Seguridad y Salud',
            ],
            [
                'description' => 'Órtesis y Prótesis',
            ]
        ];
        foreach ($elements as $element) {
            Health_indicator_group::updateOrCreate($element);
        }
    }
}
