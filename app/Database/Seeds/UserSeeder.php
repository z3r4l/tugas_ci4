<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        for ($i = 0; $i < 50; $i++) {
            $data = [
                'no_bp'         => "2010552010$i",
                'nm_mhs'        => $faker->name,
                'kelas'         => "4$faker->randomElement",
                'foto'          => 'default.png',
                'created_at'    => Time::now(),
                'updated_at'    => Time::now(),
            ];
            $this->db->table('mahasiswa')->insert($data);
        }

        // Simple Queries
        // $this->db->query('INSERT INTO users (username, email) VALUES(:username:, :email:)', $data);
        // Using Query Builder

    }
}
