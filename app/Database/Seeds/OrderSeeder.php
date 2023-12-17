<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class OrderSeeder extends Seeder
{
    public function run()
    {
        $dummyData = [
            [
                'productId' => 1,
                'customerName' => 'John',
                'deliveryAddress' => 'Jl. Ganesa No. 10, Coblong, Bandung, 40132',
                'totalAmount' => 10
            ],
            [
                'productId' => 2,
                'customerName' => 'Cena',
                'deliveryAddress' => 'Jl. Let. Jen. Purn. Dr. (HC) Mashudi No. 1 Jatinangor, Kab. Sumedang, Jawa Barat, Indonesia 45363',
                'totalAmount' => 15
            ],
            [
                'productId' => 3,
                'customerName' => 'Bastian',
                'deliveryAddress' => 'Jl. Cisitu Baru No.13, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
                'totalAmount' => 10
            ],
            [
                'productId' => 1,
                'customerName' => 'Budi',
                'deliveryAddress' => 'Jl. Cisitu Baru No.15, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
                'totalAmount' => 15
            ],
            [
                'productId' => 1,
                'customerName' => 'Anto',
                'deliveryAddress' => 'Jl. Cisitu Baru No.17, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
                'totalAmount' => 10
            ],
            [
                'productId' => 2,
                'customerName' => 'Justin',
                'deliveryAddress' => 'Jl. Cisitu Baru No.19, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
                'totalAmount' => 5
            ],
            [
                'productId' => 5,
                'customerName' => 'Supardi',
                'deliveryAddress' => 'Jl. Cisitu Baru No.21, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
                'totalAmount' => 20
            ],
            [
                'productId' => 5,
                'customerName' => 'Laksono',
                'deliveryAddress' => 'Jl. Cisitu Lama No.12, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
                'totalAmount' => 10
            ],
            [
                'productId' => 6,
                'customerName' => 'Brian',
                'deliveryAddress' => 'Jl. Cisitu Lama No.25, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
                'totalAmount' => 20
            ],
            [
                'productId' => 6,
                'customerName' => 'Juan',
                'deliveryAddress' => 'Jl. Cisitu Lama No.10, Dago, Kecamatan Coblong, Kota Bandung, Jawa Barat 40135',
                'totalAmount' => 15
            ],
        ];

        foreach ($dummyData as $orderData) {
            $this->db->table('order')->insert($orderData);
        }
    }
}
