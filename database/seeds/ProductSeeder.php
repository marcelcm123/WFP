<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Medicines')->insert([
            [
            'Generic_Name' => 'fentanil',
            'Form' => '1.inj 0,05 mg/mL (i.m./i.v.)\r\n2.patch 12,5 mcg/jam\r\n3.patch 25 mcg/jam',
            'Restriction_Formula' =>'1.5 amp/kasus.\r\n10 patch/bulan.\r\n10 patch/bulan.',
            'Forms' => '',
            'Faskes_TK1' => '-',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 1
            ],
            [
            'Generic_Name' => 'hidromorfon',
            'Form' => '1.tab lepas lambat 8mg\r\n2.tab lepas lambat 16mg',
            'Restriction_Formula' =>'1.30 tab/bulan.\r\n30 tab/bulan.',
            'Forms' => '',
            'Faskes_TK1' => '-',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 1
            ],
            [
            'Generic_Name' => 'kodein',
            'Form' => '1.tab 10 mg\r\n2.tab 20 mg',
            'Restriction_Formula' =>'1.30 tab/bulan.\r\n30 tab/bulan.',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 1
            ],
            [
            'Generic_Name' => 'asam mefenamat',
            'Form' => '1.kaps 250mg\r\n2.tab 500mg.',
            'Restriction_Formula' =>'1.30 kaps/bulan.\r\n2.30 tab/bulan.\r\n10 patch/bulan.',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 2
            ],
            [
            'Generic_Name' => 'ibuprofen',
            'Form' => '1.tab 200mg\r\n2.tab 400mg\r\n3.susp 100mg/5mL\r\n4.susp 200mg/5mL',
            'Restriction_Formula' =>'1.30 tab/bulan\r\n2.30 tab/bulan\r\n3.1 btl/kasus\r\n4.1 btl/kasus.',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 2
            ],
            [
            'Generic_Name' => 'ketoprofen',
            'Form' => '1.inj 50 mg/mL\r\n2.sup 100mg',
            'Restriction_Formula' =>'\r\n2 sup/hari, maks 3 hari.',
            'Forms' => '',
            'Faskes_TK1' => '-',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 2
            ],
            [
            'Generic_Name' => 'alopurinol',
            'Form' => '1.tab 100mg\r\n2.tab 300 mg',
            'Restriction_Formula' =>'1.30 tab/bulan\r\n2.30 tab/bulan',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 3
            ],
            [
            'Generic_Name' => 'kolkisin',
            'Form' => '1.tab 500 mcg',
            'Restriction_Formula' =>'1.30 tab/bulan.',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 3
            ],
            [
            'Generic_Name' => 'probenesid',
            'Form' => '1.tab 500 mg',
            'Restriction_Formula' =>'1.30 tab/bulan.',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 3
            ],
            [
            'Generic_Name' => 'amitriptilin',
            'Form' => '1.tab 25 mg',
            'Restriction_Formula' =>'1.30 tab/bulan.',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 4
            ],
            [
            'Generic_Name' => 'gabapentin',
            'Form' => '1.kaps 100 mg\r\n2.kaps 300 mg',
            'Restriction_Formula' =>'1.60 kaps/bulan.\r\n2.30 kaps/bulan.',
            'Forms' => '',
            'Faskes_TK1' => '-',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 4
            ],
            [
            'Generic_Name' => 'karbamazepin',
            'Form' => '1.tab 100 mg',
            'Restriction_Formula' =>'1.60 tab/bulan.',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 4
            ],
            [
            'Generic_Name' => 'bupivakain',
            'Form' => '1.inj 0,5%',
            'Restriction_Formula' =>'-',
            'Forms' => '',
            'Faskes_TK1' => '-',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 5
            ],
            [
            'Generic_Name' => 'bupivakain heavy',
            'Form' => '1.inj 0,5% + glukosa 8%',
            'Restriction_Formula' =>'-',
            'Forms' => '',
            'Faskes_TK1' => '-',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 5
            ],
            [
            'Generic_Name' => 'etil klorida',
            'Form' => '1.spray 100 mL',
            'Restriction_Formula' =>'-',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 5
            ],
            [
            'Generic_Name' => 'deksmedetomidin',
            'Form' => '1.inj 100 mcg/mL',
            'Restriction_Formula' =>'-',
            'Forms' => '',
            'Faskes_TK1' => '-',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 6
            ],
            [
            'Generic_Name' => 'desfluran',
            'Form' => '1.ih',
            'Restriction_Formula' =>'-',
            'Forms' => '',
            'Faskes_TK1' => '-',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 6
            ],
            [
            'Generic_Name' => 'halotan',
            'Form' => '1.ih',
            'Restriction_Formula' =>'-',
            'Forms' => '',
            'Faskes_TK1' => '-',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 6
            ],
            [
            'Generic_Name' => 'atropin',
            'Form' => '1.inj 0,25 mg/mL (i.v./s.k.).',
            'Restriction_Formula' =>'-',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 7
            ],
            [
            'Generic_Name' => 'diazepam',
            'Form' => '1.inj 5 mg/mL.',
            'Restriction_Formula' =>'-',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 7
            ],
            [
            'Generic_Name' => 'midazolam',
            'Form' => '1.inj 1 mg/mL (i.v.)\r\n2.inj 5mg/mL (i.v.)',
            'Restriction_Formula' =>'1.Dosis rumatan:1 mg/jam(24mg/hari).\r\n2.Dosis premedikasi:8 vial/kasus.',
            'Forms' => '',
            'Faskes_TK1' => '-',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 7
            ],
            [
            'Generic_Name' => 'deksametason',
            'Form' => '1.inj 5 mg/mL',
            'Restriction_Formula' =>'1.20 mg/hari.',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 8
            ],
            [
            'Generic_Name' => 'difenhidramin',
            'Form' => '1.inj 10 mg/mL (i.v./i.m.)\r\n2.patch 12,5 mcg/jam\r\n3.patch 25 mcg/jam',
            'Restriction_Formula' =>'1.30 mg/hari.',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 8
            ],
            [
            'Generic_Name' => 'epinefrin (adrenalin)',
            'Form' => '1.inj 1 mg/mL',
            'Restriction_Formula' =>'-',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 8
            ],
            [
            'Generic_Name' => 'atropin',
            'Form' => '1.tab 0,5 mg\r\n2.inj 0,25 mg/mL (i.v.)',
            'Restriction_Formula' =>'-',
            'Forms' => '',
            'Faskes_TK1' => '1',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 9
            ],
            [
            'Generic_Name' => 'efedrin',
            'Form' => '1.inj 50 mg/mL',
            'Restriction_Formula' =>'-',
            'Forms' => '',
            'Faskes_TK1' => '-',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 9
            ],
            [
            'Generic_Name' => 'kalsium glukonat',
            'Form' => '1.inj 10%',
            'Restriction_Formula' =>'-',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 9
            ],
            [
            'Generic_Name' => 'diazepam',
            'Form' => '1.inj 5 mg/mL\r\n2.enema 5mg/2,5 mL\r\n3.enema 10 mg/2,5 mL',
            'Restriction_Formula' =>'1.10 amp/kasus,kecuali untuk kasus di ICU.\r\n2.tube/hare,bila kejang\r\n3.2tube/hari,bila kejang.',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 10
            ],
            [
            'Generic_Name' => 'fenitoin',
            'Form' => '1.kaps 30 mg\r\n2,kaps 100 mg\r\n3.inj 50 mg/mL',
            'Restriction_Formula' =>'1.90 kaps/bulan\r\n2.120 kaps/bulan\r\n3.Untuk status epileptikus, dapat diberikan hingga dosis 15-30 mg/kgBB di Faskes Tk.2 dan 3.',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 10
            ],
            [
            'Generic_Name' => 'fenobarbital',
            'Form' => '1.tab 30 mg\r\n2.tab 100 mg\r\n3.inj 50 mg/mL\r\n4.inj 100 mg/mL',
            'Restriction_Formula' =>'1.120 tab/bulan\r\n2.60 tab/bulan\r\n40 mg/kgBB',
            'Forms' => '',
            'Faskes_TK1' => 'True',
            'Faskes_TK2' => 'True',
            'Faskes_TK3' =>'True',
            'category_id' => 10
            ]
        ]);
    }
}
