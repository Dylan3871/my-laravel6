<?php
use App\Tags;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\BD;
class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*definir cantidad de registros que vamos a insertat*/
        $cantidadTags = 200;
        //hacemos la llamada a nustro factory de tags y usamos el metodo create para insertar cantidad de datos a nstra base de datos//
     factory(Tags::class,$cantidadTags)->create();
    // $this->call(UsersTableSeeder::class);
    
    }
}
