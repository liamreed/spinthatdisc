<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        User::create(array(
            'first_name'     => 'test',
            'last_name'     => 'user',
            'email'    => 'test@spinthatdisc.co.uk',
            'phone'    => '07779001867',
            'password' => Hash::make('password'),
            'email_signature' => 'this is a test email signature',
            'personal_notes' => 'this is a test personal note that is displayed on the dashboard',
        ));
    }

}