<?php

use Illuminate\Database\Seeder;
//use App\InforWebsite;
//use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linkCommunication = array(
        	'facebook' 	=> 'facebook.com',
        	'google'	=> 'google.com'
        );
        $dataMainInforWebsite = array(
        			'title'		=>	'Title Website',
        			'slogan'	=> 'Website Slogan',
        			'logo'		=>  '',
        			'link_communications' => json_encode($linkCommunication),
        			'position'  => 'position_main', //InforWebsite::POSITION_MAIN,
                    'footer'    => '',
                    'options'   => '',
        		);
        DB::table('infor_websites')->insert($dataMainInforWebsite);
        // InforWebsite::insert($dataMainInforWebsite);

        $dataUserAdmin = array(
            'email'             =>      'admin@gmail.com',
            'display_name'      =>      'Admin',
            'password'          =>      bcrypt('abc123@!'),
            'phone'             =>      '01234567891',
            'address'           =>      'Ha Noi',
            'permission'        =>      1, // User::PERMISSION_ADMIN
            'avatar'            =>      ''
        );
        DB::table('users')->insert($dataUserAdmin);
        // User::insert($dataUserAdmin);
    }
}
