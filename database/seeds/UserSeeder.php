<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]);

        DB::table('users')->insert([
            'name' => 'kader',
            'level' => 'kader1',
            'email' => 'kader@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]);

        DB::table('users')->insert([
            'name' => 'kader lansia',
            'level' => 'kader2',
            'email' => 'kader2@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]);

        DB::table('users')->insert([
            'name' => 'Umum',
            'level' => 'umum',
            'email' => 'umum@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]);


        //DATA
        DB::table('users')->insert([
            'name' => 'Lilipatun',
            'level' => 'umum',
            'email' => 'nenisapitri20@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //5

        DB::table('users')->insert([
            'name' => 'Merlina Kusumawati',
            'level' => 'umum',
            'email' => 'alwiyahnksari@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //6

        DB::table('users')->insert([
            'name' => 'Rizki Septiani',
            'level' => 'umum',
            'email' => 'dheamarhatus56@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //7

        DB::table('users')->insert([
            'name' => 'Ade irawati',
            'level' => 'umum',
            'email' => 'fatmahwatioppo12@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //8


        DB::table('users')->insert([
            'name' => 'Mia Nurazizah',
            'level' => 'umum',
            'email' => 'Etrikahidayati02@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //9

        DB::table('users')->insert([
            'name' => 'Riyati',
            'level' => 'umum',
            'email' => 'riristripuspasari@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //10

        DB::table('users')->insert([
            'name' => 'Rani Yulianti',
            'level' => 'umum',
            'email' => 'destiakartikasari11@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //11

        DB::table('users')->insert([
            'name' => 'Bunga Amalia',
            'level' => 'umum',
            'email' => 'widiastuti.1299@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //12

        DB::table('users')->insert([
            'name' => 'isminr',
            'level' => 'umum',
            'email' => 'test@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //13

        DB::table('users')->insert([
            'name' => 'Lu Aryani',
            'level' => 'umum',
            'email' => 'vegasalsabila2003@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //14

        DB::table('users')->insert([
            'name' => 'amera',
            'level' => 'umum',
            'email' => 'almera.mira0411@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //15

        DB::table('users')->insert([
            'name' => 'astuti',
            'level' => 'umum',
            'email' => 'astuti@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //16

        DB::table('users')->insert([
            'name' => 'risma',
            'level' => 'umum',
            'email' => 'rismaasari15@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //17

        DB::table('users')->insert([
            'name' => 'Amir mahfi',
            'level' => 'umum',
            'email' => 'mitta.miftachul99@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //18

        DB::table('users')->insert([
            'name' => 'Siti Warniah',
            'level' => 'umum',
            'email' => 'Tripujiindri6@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //19

    }
}
