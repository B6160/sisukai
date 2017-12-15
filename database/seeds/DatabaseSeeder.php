<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


            DB::table('admins')->insert([
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('Passw0rd'),
                'remember_token' => '',
//            'created_at' => Carbon::now(),
//            'updated_at' => Carbon::now(),
            ]);


        }


    }

