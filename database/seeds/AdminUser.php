<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Profile;
use App\Role;
class AdminUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create([
            'name'=>'customer',
            'description'=>'Customer Role'
        ]);

        $role = Role::create([
            'name'=>'admin',
            'description'=>'Admin Role'
        ]);

    }
}
