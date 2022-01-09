<?php

use Illuminate\Database\Seeder;
use App\Ibuhamil;
use Carbon\Carbon;

class IbuHamilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ibuHamil = [
            [
                'nama' => 'Merlina Kusumawati',
                'tgllahir' => '1997-03-05',
                'namasuami' => 'Hermanto',
                'goldarah' => 'O',
                'usia' => 24,
                'rt' => '4',
                'rw' => '1',
                'telp' => '082329792300',
                'tglregister' => '2020-11-13',
                'user_id' => 6,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Rizki Septiani',
                'tgllahir' => '2020-09-25',
                'namasuami' => 'Eko Fauzul Aji',
                'goldarah' => 'A',
                'usia' => 27,
                'rt' => '23',
                'rw' => '3',
                'telp' => '082256413805',
                'tglregister' => '2020-12-12',
                'user_id' => 7,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Ade Irawati',
                'tgllahir' => '1994-07-21',
                'namasuami' => 'Fahmi Ageng hidayat',
                'goldarah' => 'A',
                'usia' => 25,
                'rt' => '25',
                'rw' => '1',
                'telp' => '085740023641',
                'tglregister' => '2020-12-20',
                'user_id' => 8,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Mia Nurazizah',
                'tgllahir' => '2001-02-10',
                'namasuami' => 'Muhamad Fardan Firdaus',
                'goldarah' => 'A',
                'usia' => 22,
                'rt' => '5',
                'rw' => '1',
                'telp' => '085329185025',
                'tglregister' => '2020-09-23',
                'user_id' => 9,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Riyati',
                'tgllahir' => '1985-09-16',
                'namasuami' => 'Ahmad Nur Sidiq',
                'goldarah' => 'B',
                'usia' => 36,
                'rt' => '21',
                'rw' => '3',
                'telp' => '085742624416',
                'tglregister' => '2020-11-03',
                'user_id' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Bunga Amalia',
                'tgllahir' => '1996-03-10',
                'namasuami' => 'Ega Yuli S',
                'goldarah' => 'O',
                'usia' => 25,
                'rt' => '4',
                'rw' => '1',
                'telp' => '082363510091',
                'tglregister' => '2020-08-20',
                'user_id' => 12,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Siti Warniah',
                'tgllahir' => '1988-11-07',
                'namasuami' => 'Tasrudin',
                'goldarah' => 'O',
                'usia' => 33,
                'rt' => '21',
                'rw' => '3',
                'telp' => '082357001924',
                'tglregister' => '2020-07-28',
                'user_id' => 19,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama' => 'Lu Aryani',
                'tgllahir' => '1993-04-03',
                'namasuami' => 'Ali Nurohman',
                'goldarah' => 'A',
                'usia' => 28,
                'rt' => '18',
                'rw' => '3',
                'telp' => '082326767409',
                'tglregister' => '2020-12-2',
                'user_id' => 14,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

            [
                'nama' => 'Lilipatun',
                'tgllahir' => '1999-04-22',
                'namasuami' => 'Sudarnono',
                'goldarah' => 'A',
                'usia' => 22,
                'rt' => '20',
                'rw' => '9',
                'telp' => '089628514303',
                'tglregister' => '2020-11-13',
                'user_id' => 5,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],

        ];

        foreach($ibuHamil as $ih){
            Ibuhamil::create($ih);
        }
    }
}
