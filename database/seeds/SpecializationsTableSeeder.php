<?php

use App\Models\Specialization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecializationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specializations')->delete();
        $specializations = [
            ['en'=> 'Arabic', 'ar'=> 'عربي'],
            ['en'=> 'Sciences', 'ar'=> 'علوم'],
            ['en'=> 'Computer', 'ar'=> 'معلوماتية'],
            ['en'=> 'English', 'ar'=> 'انجليزي'],
            ['en'=> 'French', 'ar'=> 'فرنسي'],
            ['en'=> 'Maths', 'ar'=> 'رياضيات'],
            ['en'=> 'physics', 'ar'=> 'فيزياء'],
            ['en'=> 'chemistry', 'ar'=> 'كيمياء'],
            ['en'=> 'geography', 'ar'=> 'جغرافيا'],
            ['en'=> 'History', 'ar'=> 'التاريخ'],
        ];
        foreach ($specializations as $S) {
            Specialization::create(['Name' => $S]);
        }
    }
}
