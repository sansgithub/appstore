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
        DB::table('users')->delete();

        DB::table('users')->insert([
        	[
        		'email'		=> 'sanjeevkdk32@gmail.com',
        		'password'	=>  bcrypt('admin123'),
        		'first_name'=> 'Sanjeev',
        		'last_name'	=> 'Khadka',
        		'user_type'	=> 'admin',
        		'approval'	=>	'1',
                
        	],
            [
                'email'     => 'sanjeev_kdk32@yahoo.com',
                'password'  =>  bcrypt('sanjeev'),
                'first_name'=> 'Sanjeev',
                'last_name' => 'Khadka',
                'user_type' => 'user',
                'approval'  =>  '0'
            ]
        ]);
    }
}
