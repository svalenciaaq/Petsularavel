<?php

use Illuminate\Database\Seeder;
use App\Role;
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

      $user->name = "admin";
      $user->email = "admin@gmail.com";
      $user->password = "secret";
      $user->save();
    }
}
