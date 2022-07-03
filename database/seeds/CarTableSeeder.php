<?php

use App\Car;
use Illuminate\Database\Seeder;

class CarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $car1 =  new Car();
        $car1->car = "Audi";
        $car1->model = "A3";
        $car1->desc = "Premium model";
        $car1->img = "img1";
        $car1->price = "23000";
        $car1->save();

        
        $car2 =  new Car();
        $car2->car = "Audi";
        $car2->model = "A6";
        $car2->desc = "Novi dizajn";
        $car2->img = "img1";
        $car2->price = "23000";
        $car2->save();

    }
}
