<?php

use Illuminate\Database\Seeder;
use App\Role;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       // factory(App\User::class,100)->create();
    $user = new\App\User([
        'name'=>'muhammad khubaib',
        'email'=>'muhammad@gmail.com',
        'password'=>bcrypt('student'),
        'Address'=>'multan',
        'Telephone'=>'042345676',
        'imagePath'=>'images/profile1.jpg',
        'role_id'=> '1'


    ]);
    $user->save();

        $user = new\App\User([
            'name'=>'muhammad dawood',
            'email'=>'dawood@gmail.com',
            'password'=>bcrypt('dawood'),
            'Address'=>'lahore',
            'Telephone'=>'032456876',
            'imagePath'=>'images/profile2.jpg',
            'role_id'=>'1'
        ]);
        $user->save();

        $user = new\App\User([
            'name'=>'muhammad adnan',
            'email'=>'adnan@gmail.com',
            'password'=>bcrypt('smata'),
            'Address'=>'multan',
            'Telephone'=>'034578965',
            'imagePath'=>'images/profile3.jpg',
            'role_id'=>'1'

        ]);
        $user->save();

        $user = new\App\User([
            'name'=>'atif',
            'email'=>'atif@gmail.com',
            'password'=>bcrypt('atifsh'),
            'Address'=>'lahore',
            'Telephone'=>'032121234',
            'imagePath'=>'images/profile4.jpg',
            'role_id'=>'1'

        ]);
        $user->save();

        $user = new\App\User([
            'name'=>'usama',
            'email'=>'usama@gmail.com',
            'password'=>bcrypt('usamac'),
            'Address'=>'faisal town',
            'Telephone'=>'032145678',
            'imagePath'=>'images/profile5.jpg',
            'role_id'=>'1'

        ]);
        $user->save();

        $user = new\App\User([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('admin'),
            'Address'=>'pakistan',
            'Telephone'=>'11111222',
            'imagePath'=>'images/profile6.jpg',
            'role_id'=>'2'

        ]);
        $user->save();
    }
}
