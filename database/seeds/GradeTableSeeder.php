<?php

use Illuminate\Database\Seeder;
use App\Grade;

class GradeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      	$grade = new Grade();
        $grade->name = 'Iniciado';
        $grade->save();

        $grade = new Grade();
        $grade->name = 'Intermedio';
        $grade->save();

        $grade = new Grade();
        $grade->name = 'Avanzado';
        $grade->save();
    }
}
