<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        \DB::table('admins')->delete();

        \App\Models\Admin::create(
            array(
                'email' => "Priyanshu.s@chapter247.com",
                'password' => \Hash::make('123456789'),
            )
            );

            \App\Models\Admin::create(
                array(
                    'email' => "admin@admin.com",
                    'password' => \Hash::make('123456789'),
                )
                );
    }

}