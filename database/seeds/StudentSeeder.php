<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        DB::table('students')->delete();

        DB::table('students')->insert(array (
            0 =>
                array (
                    'id' => 1,
                    'name' => 'Chhie Thearith',
                    'age' => '21',
                    'email' => 'chheathearith772@gmail.com',
                    'address' => 'Takeo province',
                    'sex' => 'Male',
                    'phone' => '096 33 02 576',
                    'created_at' => '2019-08-31 12:31:52',
                    'updated_at' => '2019-08-31 12:31:52',
                ),
            1 =>
                array (
                    'id' => 2,
                    'name' => 'Dara',
                    'age' => '21',
                    'email' => 'Dara@gmail.com',
                    'address' => 'Takeo province',
                    'sex' => 'Male',
                    'phone' => '096 33 02 576',
                    'created_at' => '2019-08-31 12:31:52',
                    'updated_at' => '2019-08-31 12:31:52',
                ),
            2 =>
                array (
                    'id' => 3,
                    'name' => 'khmer',
                    'age' => '21',
                    'email' => 'khmer@gmail.com',
                    'address' => 'Phnom penh',
                    'sex' => 'Male',
                    'phone' => '096 33 02 576',
                    'created_at' => '2019-08-31 12:31:52',
                    'updated_at' => '2019-08-31 12:31:52',
                ),
        ));
    }
}
