<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $dummyData = [
            [
                'username' => 'abilium',
                'email' => 'abil@gmail.com',
                'hashedPassword' => md5('abilabil'),
            ],
            [
                'username' => 'xmriz',
                'email' => 'amriz@gmail.com',
                'hashedPassword' => md5('amrizamriz'),
            ],
            [
                'username' => 'luthfi',
                'email' => 'luthfi@gmail.com',
                'hashedPassword' => md5('luthfiluthfi'),
            ],
        ];

        foreach ($dummyData as $userData) {
            $this->db->table('users')->insert($userData);
        }
    }
}
