<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([

            'site_name'         =>  "Blog",
            'address'           =>  'Cairo, Egypt',
            'contact_number'    =>  "9876543210",
            'contact_email'     =>  'a_khater55@yahoo.com'

        ]);
    }
}
