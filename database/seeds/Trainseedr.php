<?php

use Illuminate\Database\Seeder;
use app\Train;

class Trainseedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Train= new Train();

            $faker = \faker\Factory::create('it_IT');

        for($i=0; $i<50; $i++){
            $newTrain->azienda=$faker->word();
            $newTrain->stazione_partenza=$faker->city();
            $newTrain->stazione_arrivo=$faker->city();
            $newTrain->orario_partenza=$faker->dateTimeBetween('-3 days', '+3 days');
            $newTrain->orario_arrivo=$faker->dateTimeBetween('now', '+3 days')();
            $newTrain->codice_treno=$faker->bothify();
            $newTrain->numero_carrozza=$faker->randomDigitNotNull('???-####');
            $newTrain->in_orario=$faker->boolean();
            $newTrain->in_ritardo=$faker->boolean();

            $newTrain->save();
        }

    }
}
