<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AttendeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attendees')->insert([
            'name' => Str::random(20),
            'email' => Str::random(20).'@gmail.com',
            'city' => Str::random(20),
            'phone' => Str::random(20)
        ]);
    }
}
