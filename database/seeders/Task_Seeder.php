<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Task_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::factory(20)->state([
            'completed'=> false,
            'name'=> "akmal"
        ])->create();

        Task::factory(80)->state([
            'completed'=> true
        ])->create();

        
    
    }
}
