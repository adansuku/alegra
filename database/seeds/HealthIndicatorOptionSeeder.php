<?php

use Illuminate\Database\Seeder;
use App\Models\Health_indicator_group;
use App\Models\Health_indicator_option;

class HealthIndicatorOptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach(Health_indicator_group::all() as $hg){
            if(strtolower($hg->description) == 'comunicacionales'){
                $options = ["Teléfono Adaptado","Productos de apoyo auditivos (audífonos y otros)","Productos de apoyo visuales (braille)","Tablet","Ordenador","Otro"];
            }elseif(strtolower($hg->description) == 'visuales'){
                $options = ["Pictogramas","Relojes visibles o con voz","Batón guía","Recuerdos y fotos personales","Otro"];
            }elseif(strtolower($hg->description) == 'movilidad'){
                $options = ["Silla de ruedas manual autopropulsable","Silla de ruedas manual No autopropulsable","Silla de ruedas eléctrica","Andador 2 ruedas","Andador 4 ruedas","Muleta/s","Bastón","Coche adaptado","Bicicleta adaptada","Otro"];
            }elseif(strtolower($hg->description) == 'descanso'){
                $options = ["Cama articulada","Barandillas","Cubre barandilla","Patucos y Taloneras","Colchón antiescaras","Cojín antiescaras","Colchón anticaídas","Pijama Geriátrico","Almohada cervical","Respaldo acolchado para ayudarle a sentarse en la cama","Otro"];
            }elseif(strtolower($hg->description) == 'transferencias'){
                $options = ["Agarraderas","Sábanas deslizantes","Cojín elevador hidráulico","Cinturón de movilización","Disco de rotación","Grúa Bipedestadora","Grúa de Movilidad","Asidera Plegable de Incorporación","Otro"];
            }elseif(strtolower($hg->description) == 'aseo y baño'){
                $options = ["Silla de inodoro","Asiento para Bañera","Silla de Baño","Elevadores de inodoro","Barras inodoro","Antideslizante","Utensilios de aseo adaptados","Otro"];
            }elseif(strtolower($hg->description) == 'alimentación'){
                $options = ["Vasos adaptados","Cubiertos adaptados","Platos adaptados","Reborde de plato","Mantel antideslizante","Soportes para pajita","Abridores de Botellas","Pelador","Baberos","Otro"];
            }elseif(strtolower($hg->description) == 'vestido'){
                $options = ["Calzadores y Sacabotas","Tiradores para Cremallera","Abotonadores","Calzador de medias de compresión con guía talón","Ropa adaptada","Otro"];
            }elseif(strtolower($hg->description) == 'seguridad y salud'){
                $options = ["Pastillero","Teleasistencia","Alarma","Detector de caídas","Localizadores","Detectores de humo","Detectores de gas","Otro"];
            }elseif(strtolower($hg->description) == 'órtesis y prótesis'){
                $options = ["Prótesis de MMSS","Prótesis de MMII","Órtesis de MMSS","Órtesis de MMII"];
            }
            $elements = [];
            foreach($options as $opt){
                array_push($elements,[
                    'option' => $opt,
                    'health_indicator_group_id' => $hg->id
                ]);
            }
            
            foreach ($elements as $element) {
                Health_indicator_option::updateOrCreate($element);
            }
        }
    }
}
