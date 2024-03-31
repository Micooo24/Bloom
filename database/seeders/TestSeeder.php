<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   
        //
        public function run()
        {
             Product::factory(5)->create();
          
      
            // DB::table('users')->insert([
            //     [
            //         'name' => 'test',
            //         'email' => 'test@gmail.com',
            //         'password' => Hash::make('12345678'),
            //     ],
            //     [
            //         'name' => 'test2',
            //         'email' => 'test2@gmail.com',
            //         'password' => Hash::make('12345678'),
            //     ],
            //     [
            //         'name' => 'test3',
            //         'email' => 'test3@gmail.com',
            //         'password' => Hash::make('12345678'),
            //     ],
            //     [
            //         'name' => 'test4',
            //         'email' => 'test5@gmail.com',
            //         'password' => Hash::make('12345678'),
            //     ],

                
            // ]);
        }
}
