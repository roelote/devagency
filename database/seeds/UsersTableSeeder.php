<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new User;
        $usuario->name='admin';
        $usuario->email='admin@a.com';
        $usuario->password= bcrypt('asdasdasd');
        $usuario->save();

        User::create([
            'name'=>'user',
            'email'=>'user@a.com',
            'password'=> bcrypt('asdasdasd')
        ]);

    }
}
