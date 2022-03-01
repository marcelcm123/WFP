<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('categories')->insert([
            [
                'name' => 'ANALGESIK NARKOTIK',
                'Description' => 'a.nj: Hanya untuk nyeri berat dan harus diberikan oleh tim medis yang dapat melakukan resusitasi.
            \r\nb.patch:Untuk nyeri kronik pada pasien kanker yang tidak terkendali.\r\n-Tidak untuk nyeri akut.'
            ],
            [
                'name' => 'ANALGESIK NON NARKOTIK',
                'Description' => '-'
            ],
            [
                'name' => 'ANTIPIRAI',
                'Description' => '-'
            ],
            [
                'name' => 'NYERI NEUROPATIK',
                'Description' => '-'

            ],
            [
                'name' => 'ANESTETIK LOKAL',
                'Description' => '-'
            ],
            [
                'name' => 'ANESTETIK UMUM  dan OKSIGEN',
                'Description' => '-'

            ],
            [
                'name' => 'OBAT untuk PROSEDUR PRE OPERATIF',
                'Description' => '-'
            ],
            [
                'name' => 'ANTIALERGI dan OBAT  untuk ANAFILAKSIS',
                'Description' => '-'
            ],
            [
                'name' => 'KHUSUS',
                'Description' => '-'
            ],
            [
                'name' => 'ANTIEPILEPSI - ANTIKONVULSI',
                'Description' => '-'
            ]
        ]);
        
    }
}
