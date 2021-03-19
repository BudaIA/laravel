<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Curso::factory(50)->create();
        
        /*$curso = new Curso();

        $curso->name = "Laravel";
        $curso->descripcion = "El mejor framework de PHP";
        $curso->categoria = "Desarrollo Web";

        $curso->save();


        $curso1 = new Curso();

        $curso1->name = "Laravel";
        $curso1->descripcion = "El mejor framework de PHP";
        $curso1->categoria = "Desarrollo Web";

        $curso1->save();

        $curso2 = new Curso();

        $curso2->name = "Laravel";
        $curso2->descripcion = "El mejor framework de PHP";
        $curso2->categoria = "Desarrollo Web";

        $curso2->save();*/
    }
}
