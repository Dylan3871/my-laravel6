<?php
use App\Tags;
use App\Images;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

 /*definir cantidad de registros que vamos a insertat*/
 $cantidadTags = 200;
 $cantidadImages = 400;
 //hacemos la llamada a nustro factory de tags y usamos el metodo create para insertar cantidad de datos a nstra base de datos//
factory(Tags::class,$cantidadTags)->create();
factory(Images::class,$cantidadImages)->create();
// $this->call(UsersTableSeeder::class);
    }
}
