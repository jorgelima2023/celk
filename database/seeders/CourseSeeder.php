<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //  criar registro fake de teste com mais de uma coluna, exemplo
        /*
        Course::create(
            [
                'name' => 'curso de laravel - T1',
                'price' => 197.48
            ]
        );
        */

        // criar registro fake de teste, verificar se ja nao existe
        if( !Course::where('name', 'curso de laravel - T001')->first() ){
            Course::create(
                [
                    'name' => 'curso de laravel - T001',
                    'price' => 197.43,
                ]
            );
        }
        if( !Course::where('name', 'curso de laravel unit - T001')->first() ){
            Course::create(
                [
                    'name' => 'curso de laravel unit - T001',
                    'price' => 247.43,
                ]
            );
        }
    }
}
