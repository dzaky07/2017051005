<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data = [
            [
                'npm' => '2017051005',
                'nama'    => 'M. Dzaky Fadhil Athaya',
                'alamat' => 'sukamaju',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2017051004',
                'nama'    => 'Thomas Slebew',
                'alamat' => 'sukasuka',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2017051069',
                'nama'    => 'Rian Batagor',
                'alamat' => 'enggasuka',
                'created_at' => Time::now()
            ],
            [
                'npm' => '2017051071',
                'nama'    => 'Reza Kecap',
                'alamat' => 'sukamundur',
                'created_at' => Time::now()
            ]
        ];

        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);

    }
}
}