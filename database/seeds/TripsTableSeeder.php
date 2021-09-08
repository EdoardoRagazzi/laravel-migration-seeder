<?php

use Illuminate\Database\Seeder;
use App\Trip;
class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ciclo for per popolare il database
        for($i = 0;$i<100; $i++ ){
            // creare una nuova istanza 
            $newTrip = new Trip();
            $newTrip->name ='Costa Concordia';
            $newTrip->place ='Spain';
            $newTrip->price = rand(1,2000);
            $newTrip->description = 'lorem10 wewdwdw wweedwedwed dwedwd wedwedwed wedwed';
            // salvare il database----always
            $newTrip->save();
        }
    }
}
