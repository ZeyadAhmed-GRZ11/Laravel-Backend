<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Student extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    
    {
         DB::table('students')->insert (

            [
          'stuname'=>'david',
          'email'=>'david@gmail.com',
        ],
            [
          'stuname'=>'david',
          'email'=>'david@gmail.com',
        ],
            [
          'stuname'=>'david',
          'email'=>'david@gmail.com',
        ],
            [
          'stuname'=>'david',
          'email'=>'david@gmail.com',
        ],
            [
          'stuname'=>'david',
          'email'=>'david@gmail.com',
        ],
            [
          'stuname'=>'david',
          'email'=>'david@gmail.com',
        ],
            [
          'stuname'=>'david',
          'email'=>'david@gmail.com',
        ],
            [
          'stuname'=>'david',
          'email'=>'david@gmail.com',
        ],
            [
          'stuname'=>'david',
          'email'=>'david@gmail.com',
        ],
            [
          'stuname'=>'david',
          'email'=>'david@gmail.com',
        ],
            [
          'stuname'=>'david',
          'email'=>'david@gmail.com',
        ],
    );
    
    }
}
