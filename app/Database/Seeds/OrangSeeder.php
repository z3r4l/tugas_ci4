<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrangSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('ms_MY');
        for ($i = 0; $i < 100; $i++) {
            $data = [
                'nama' => $faker->name,
                'alamat' => $faker->address,
            ];
            $this->db->table('orang')->insert($data);
        }
    }
}
