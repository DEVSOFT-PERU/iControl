<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \App\User::create([ 'name'=>'Mark Anthony Arroyo Garcia',
                          'email'=>'mark131296@gmail.com',
                          'password'=>'$2y$10$PqArBA8L4TWLs2Cjn0UMLOf23fsYSLdPz4hZAHKSbZDNKGMnPkOu2']);

      \App\User::create([ 'name'=>'Administrador',
                          'email'=>'admin@devsoft.pe',
                          'password'=>'$2y$10$PqArBA8L4TWLs2Cjn0UMLOf23fsYSLdPz4hZAHKSbZDNKGMnPkOu2']);
                          
      factory(\App\User::class)->times(100)->create();
    }
}
