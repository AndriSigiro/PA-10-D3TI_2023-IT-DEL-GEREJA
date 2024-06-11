<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatajemaatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
     //insert data ke db 
    public function run()
    {   
        DB::table('datajemaats')->insert([
            'nama'=>'Andri Sigiro',
            'jeniskelamin' => 'Laki-laki',
            'alamat' => 'Pangururan , Samosir',
            'notelpon' => '083163483028',

        ]);
    }
}
