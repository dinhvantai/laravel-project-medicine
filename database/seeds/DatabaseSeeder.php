<?php

use Illuminate\Database\Seeder;
use App\InforWebsite;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $linkCommunication = [
            'facebook'  => 'facebook.com',
            'google'    => 'google.com',
        ];
        $dataMainInforWebsite = [
            'title'     => 'Title Website',
            'slogan'    => 'Website Slogan',
            'logo'      => '',
            'link_communications' => json_encode($linkCommunication),
            'position'  => InforWebsite::POSITION_MAIN,
            'footer'    => '',
            'options'   => '',
        ];
        InforWebsite::insert($dataMainInforWebsite);

        $dataUserAdmin = [
            'email'             =>  'admin@gmail.com',
            'display_name'      =>  'Admin',
            'password'          =>  bcrypt('abc123@!'),
            'phone'             =>  '01234567891',
            'address'           =>  'Ha Noi',
            'permission'        =>  User::PERMISSION_ADMIN,
            'avatar'            =>  '',
        ];
        User::insert($dataUserAdmin);
    }
}
