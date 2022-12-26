<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
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
            'kk' => '1234567890123451',
            'nik' => '1234567890123451',
            'level' => 'umum',
            'email' => 'umum@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]);


        //DATA
        DB::table('users')->insert([
            'name' => 'Lilipatun',
            'kk' => '1234567890123450',
            'nik' => '1234567890123450',
            'level' => 'umum',
            'email' => 'nenisapitri20@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //5

        DB::table('users')->insert([
            'name' => 'Merlina Kusumawati',
            'kk' => '1234567890123449',
            'nik' => '1234567890123449',
            'level' => 'umum',
            'email' => 'alwiyahnksari@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //6

        DB::table('users')->insert([
            'name' => 'Rizki Septiani',
            'kk' => '1234567890123448',
            'nik' => '1234567890123448',
            'level' => 'umum',
            'email' => 'dheamarhatus56@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //7

        DB::table('users')->insert([
            'name' => 'Ade irawati',
            'kk' => '1234567890123447',
            'nik' => '1234567890123447',
            'level' => 'umum',
            'email' => 'fatmahwatioppo12@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //8


        DB::table('users')->insert([
            'name' => 'Mia Nurazizah',
            'kk' => '1234567890123446',
            'nik' => '1234567890123446',
            'level' => 'umum',
            'email' => 'Etrikahidayati02@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //9

        DB::table('users')->insert([
            'name' => 'Riyati',
            'kk' => '1234567890123445',
            'nik' => '1234567890123445',
            'level' => 'umum',
            'email' => 'riristripuspasari@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //10

        DB::table('users')->insert([
            'name' => 'Rani Yulianti',
            'kk' => '1234567890123444',
            'nik' => '1234567890123444',
            'level' => 'umum',
            'email' => 'destiakartikasari11@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //11

        DB::table('users')->insert([
            'name' => 'Bunga Amalia',
            'kk' => '1234567890123443',
            'nik' => '1234567890123443',
            'level' => 'umum',
            'email' => 'widiastuti.1299@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //12

        DB::table('users')->insert([
            'name' => 'isminr',
            'kk' => '1234567890123442',
            'nik' => '1234567890123442',
            'level' => 'umum',
            'email' => 'test@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //13

        DB::table('users')->insert([
            'name' => 'Lu Aryani',
            'kk' => '1234567890123441',
            'nik' => '1234567890123441',
            'level' => 'umum',
            'email' => 'vegasalsabila2003@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //14

        DB::table('users')->insert([
            'name' => 'amera',
            'kk' => '1234567890123440',
            'nik' => '1234567890123440',
            'level' => 'umum',
            'email' => 'almera.mira0411@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //15

        DB::table('users')->insert([
            'name' => 'astuti',
            'kk' => '1234567890123321',
            'nik' => '1234567890123321',
            'level' => 'umum',
            'email' => 'astuti@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //16

        DB::table('users')->insert([
            'name' => 'risma',
            'kk' => '1234567890123459',
            'nik' => '1234567890123459',
            'level' => 'umum',
            'email' => 'rismaasari15@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //17

        DB::table('users')->insert([
            'name' => 'Amir mahfi',
            'kk' => '1234567890123458',
            'nik' => '1234567890123458',
            'level' => 'umum',
            'email' => 'mitta.miftachul99@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //18

        DB::table('users')->insert([
            'name' => 'Siti Warniah',
            'kk' => '1234567890123457',
            'nik' => '1234567890123457',
            'level' => 'umum',
            'email' => 'Tripujiindri6@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //19

        DB::table('users')->insert([
            'name' => 'Firman',
            'kk' => '1234567890123456',
            'nik' => '1234567890123456',
            'level' => 'umum',
            'email' => 'firman@gmail.com',
            'password' => bcrypt(12345678),
            'remember_token' => Str::random(50)
        ]); //19

    }
}
