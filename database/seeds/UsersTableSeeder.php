<?php

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
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('users')->truncate();

        DB::table('users')->insert([
          [
            "name" => "Eko Teguh",
            "email" => "eko@gmail.com",
            "password" => bcrypt('secret')
          ],
          [
            "name" => "Teguh Widodo",
            "email" => "teguh@gmail.com",
            "password" => bcrypt('secret')
          ],
          [
            "name" => "Widodo Eko",
            "email" => "widodo@gmail.com",
            "password" => bcrypt('secret')
          ]
        ]);
    }
}
