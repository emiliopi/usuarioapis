<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'  => 'Emilio',
            'age' 	=> '29', 
            'gender'  => 'Masculino',
            'nationality' 	=> 'Salvadoreño', 
            'religion'  => 'Catolico',
            'photo' 	=> 'https://via.placeholder.com/150',           
        ]);
    }
}
