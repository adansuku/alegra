<?php

use Illuminate\Database\Seeder;
use App\Models\Support_product;

class SupportProductSeeder extends Seeder
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
                'description' => 'Silla de ruedas manual',
            ],
            [
                'description' => 'Silla de ruedas eléctrica',
            ],
            [
                'description' => 'Andador',
            ],
            [
                'description' => 'Bastón',
            ],
            [
                'description' => 'Muleta/s',
            ],
            [
                'description' => 'Prótesis MMSS',
            ],
            [
                'description' => 'Prótesis MMII',
            ],
            [
                'description' => 'Órtesis MMSS',
            ],
            [
                'description' => 'Órtesis MMII',
            ],
            [
                'description' => 'Audífonos',
            ],
            [
                'description' => 'Gafas',
            ]
        ];
        foreach ($elements as $element) {
            Support_product::updateOrCreate($element);
        }
    }
}
