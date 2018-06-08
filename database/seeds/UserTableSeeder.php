<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'root';
        $user->email = 'iescierva.carlos@gmail.com';
        $user->password = md5('123456');
        $user->status = 'suscrito';
        $user->role_id = '1';
        $user->save();

        $user = new User();
        $user->name = 'admin';
        $user->email = 'admin@gmail.com';
        $user->password = md5('123456');
        $user->role_id = '1';
        $user->save();

        $user = new User();
        $user->name = 'teacher';
        $user->email = 'teacher@gmail.com';
        $user->password = md5('123456');
        $user->status = 'suscrito';
        $user->role_id = '2';
        $user->save();

        $user = new User();
        $user->name = 'student';
        $user->email = 'prueba@gmail.com';
        $user->password = md5('123456');
        $user->role_id = '3';
        $user->save();

        $user = new User();
        $user->name = 'student0';
        $user->email = 'prueba0@gmail.com';
        $user->password = bcrypt('123456');
        $user->role_id = '3';
        $user->save();

        $user = new User();
        $user->name = 'admin0';
        $user->email = 'admin0@gmail.com';
        $user->password = bcrypt('123456');
        $user->role_id = '1';
        $user->save();

        $user = new User();
        $user->name = 'teacher0';
        $user->email = 'teacher0@gmail.com';
        $user->password = bcrypt('123456');
        $user->role_id = '2';
        $user->save();
    }
}
