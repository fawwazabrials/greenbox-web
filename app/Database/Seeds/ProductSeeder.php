<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $dummyData = [
            [
                'name' => 'Tauge Panjang',
                'variant' => '250 g',
                'price' => 10800,
                'stock' => 100,
                'description' => 'Tauge yang juga disebut dengan toge adalah tunas atau kecambah dari kacang hijau. Jika dikonsumsi secara langsung sebagai lalapan, tauge mempunyai rasa yang manis dengan tekstur yang renyah.',
                'description_kandungan' => 'Toge atau tauge sendiri diketahui rendah kalori, mengandung banyak serat dan vitamin.',
                'description_petunjuk_penyimpanan' => '1. Jangan mencuci tauge yang akan disimpan\n2. Bungkus dengan kertas\n3. Masukkan dalam wadah tertutup\n4. Simpan di kulkas atau chiller',
            ],
            [
                'name' => 'Kentang Dieng Siomay',
                'variant' => '500 g (7-10 pcs)',
                'price' => 13500,
                'stock' => 55,
                'description' => 'Kentang Dieng Siomay (baby/rendang) memiliki ukuran paling kecil dibanding jenis Sedang (AB) dan Super (Jumbo). Isinya sekitar 15 - 20 pcs (dalam kondisi panen normal) per kilogram. Cocok untuk olahan semur/rendang, roasted potato, dan lainnya.\n\nKentang asal Dieng, Jawa Tengah ini memiliki ukuran yang lebih besar dari kentang biasa. Dagingnya berwarna kuning ke-emasan dan teksturnya lebih lembut. Kandungan airnya yang cukup rendah membuat kentang ini cocok diolah menjadi berbagai jenis masakan karena tidak gampang hancur.',
            ],
            [
                'name' => 'Asparagus',
                'variant' => '200 g',
                'price' => 38900,
                'stock' => 20,
                'description' => 'Panjang bervariasi antara 20-40 cm tergantung panen. Rasanya unik dan ringan. Biasa dimasak bersama bawang putih, cuka, dan lemon.',
                'description_kandungan' => 'Asparagus kaya akan berbagai nutrisi. Mulai dari vitamin A, C, E, dan K, serat, folat, kromium, asam amino, dan lain-lain.\n\nKarena itu, asparagis dapat membantu menurunkan tekanan darah tinggi dan membantu menjaga keseimbangan kadar insulin dalam darah.',
                'description_petunjuk_penyimpanan' => '1. Bungkus bagian ujung asparagus dengan tisu makan\n2. Simpan dalam wadah tertutup dan bersih\n3. Masukkan dalam chiller untuk menjaga kesegarannya\n\nSebaiknya, gunakan asparagus 1-2 hari setelah pembelian untuk mendapatkan rasa dan tekstur terbaik.',
            ],
            [
                'name' => 'Terong Ungu',
                'variant' => '200 g',
                'price' => 9500,
                'stock' => 150,
                'description' => 'Terong memiliki daging yang tebal dan lunak. Dapat diolah menjadi terong goreng tepung, terong balado, dan lain-lain. ',
                'description_kandungan' => 'Terong ungu memiliki kandungan serat, kalium, vitamin c dan B6, fitonutrien, dan polifenol. Sehingga dapat membantu menjaga kesehatan jantung, mengontrol gula darah, dan memiliki efek anti kanker.',
                'description_petunjuk_penyimpanan' => '- Simpan di tempat kering dan sejuk atau masukkan dalam wadah kertas\n- Terong dapat disimpan di suhu ruang atau di kulkas',
            ],
            [
                'name' => 'Bawang Merah',
                'variant' => '100 g',
                'price' => 4400,
                'stock' => 500,
                'description' => 'Bawang merah pilihan yang diproses khusus sebelum dikirim. Lebih kering dari bawang merah biasa. Sehingga tidak mudah busuk dan tahan hingga 1 pekan di suhu ruang. Lebih harum. Ukuran beragam. Dapat digunakan sebagai bumbu dan meningkatkan cita rasa masakan, diolah menjadi bawang goreng, atau kreasi lainnya. Pengiriman sesuai ketersediaan dari petani di daerah Brebes, Nganjuk, atau Batu.',
                'description_kandungan' => 'Bawang merah mengandung vitamin B6 yang dapat membantu mengatasi mual pada ibu hamil. Serta vitamin B9 yang baik untuk pertumbuhan janin.',
                'description_petunjuk_penyimpanan' => 'Simpan bawang merah yang belum dikupas di tempat kering dan bersih',
            ],
            [
                'name' => 'Labu Acar',
                'variant' => '1 kg',
                'price' => 42900,
                'stock' => 100,
                'description' => 'Daging buahnya berwarna hijau pucat. Teksturnya renyah saat mentah dan lembut saat matang. Rasanya dingin, ringan, dan sedikit manis. Biasa dinikmati sebagai lalapan atau gado-gado. Cocok dipadukan dengan nasi hangat, ayam, atau ikan goreng. ',
                'description_kandungan' => 'Labu acar memiliki kandungan vitamin C, vitamin B, potasium, magnesium, asam folat, dan kandungan penting lain yang cukup tinggi. Walau kaya akan nutrisi, labu acar memiliki kadar kalori, lemak, dan karbohidrat yang cenderung rendah, sehingga cocok disertai dalam berbagai diet.',
                'description_petunjuk_penyimpanan' => '- Simpan di tempat kering dan sejuk\n- Jika terlanjur dipotong, simpan labu acar dalam wadah tertutup, lalu simpan dalam kulkas.',
            ],
            [
                'name' => 'Buncis',
                'variant' => '1 kg',
                'price' => 40500,
                'stock' => 25,
                'description' => 'Buncis memiliki rasa yang sedikit manis dibandingkan kacang panjang. Teksturnya renyah. Cocok diolah sebagai tumisan, sop, atau direbus sebentar dan disajikan bersama steak. Bentuknya agak melengkung atau lurus. Warna kulit buncis bervariasi antara hijau muda hingga hijau tua. Pengiriman random sesuai ketersediaan di petani.',
                'description_kandungan' => 'Buncis mengandung klorofil yang dapat menurunkan risiko kanker dengan menghadang efek karsigonetiknya. Kandungan vitamin C nya juga dapat meningkatkan sistem kekebalan tubuh dan menjaga kesehatan kulit.\n\nBuncis juga mengandung vitamin A,B1, B3, B6 dan K hingga ragam mineral yang meningkatkan metabolisme dan sebagai antioksidan.',
                'description_petunjuk_penyimpanan' => '1. Siangi buncis\n2. Celupkan buncis dalam air hangat atau garam\n3. Cuci bersih, lalu potong sesuai selera\n4. Rebus air sampai mendidih, tambahkan sedikit garam\n5. Masukkan buncis dan rebus selama 30 detik\n6. Angkat, siram air es, tiriskan\n7. Masukkan dalam wadah kedap udara\n8. Simpan dalam freezer\n\nDengan cara ini, buncis dapat bertahan hingga 1 bulan.',
            ],
            [
                'name' => 'Sawi Putih',
                'variant' => '1 kg',
                'price' => 17200,
                'stock' => 200,
                'description' => 'Sawi Putih memiliki daun yang lebih lebar, cukup tebal dan kaku. Soal rasa, engga kalah enak sama sawi pada umumnya. Warna sawi umumnya putih dengan warna hijau pucat di bagian tepinya. Namun, ada pula varietas sawi putih dengan warna hijau muda yang lebih terang.',
                'description_kandungan' => 'Sawi Putih mengandung Kalium, Magnesium, Beta Karoten,Kalsium, Potassium, Serat, Glutamin, Vitamin C, sumber Antioksidan dan lain-lain.\n\nKonsumsi sawi putih dapat membantu meningkatkan kesehatan mata, tulang, membantu menurunkan berat badan, dan menjaga kesehatan pencernaan.',
                'description_petunjuk_penyimpanan' => '1. Jangan mencuci sawi yang akan disimpan\n2. Bungkus dengan kertas atau tisu\n3. Masukkan ke dalam plastik atau wadah kedap udara\n4. Simpan dalam kulkas atau chiller',
            ],
            [
                'name' => 'Brokoli',
                'variant' => '1 kg (2-4 pcs)',
                'price' => 42900,
                'stock' => 15,
                'description' => 'Brokoli konvensional memiliki warna hijau segar. Cocok diolah sebagai sup, dimasak saus, capcay, atau tumisan lainnya. Dapat dikreasikan dengan cara dikukus, digoreng, atau dibakar sesuai selera.',
                'description_kandungan' => 'Brokoli mengandung vitamin K dan kalsium. Sehingga membantu menjaga kesehatan tulang',
                'description_petunjuk_penyimpanan' => '-Simpan di dalam kulkas agar tahan lebih lama\n-Jangan cuci sayur sebelum disimpan',
            ],
            [
                'name' => 'Wortel Berastagi',
                'variant' => '500 g (2-3 pcs)',
                'price' => 14500,
                'stock' => 105,
                'description' => 'Wortel berastagi memiliki bentuk yang lebih gemuk, kulitnya lebih mulus dan cerah, teksturnya renyah, dan rasanya manis. Dapat diolah sebagai camilan sehat, sup, tumisan, salad, jus, dan lain-lain.',
                'description_kandungan' => 'Wortel kaya akan vitamin A dan karotenoid yang bermanfaat untuk menjaga kesehatan mata.\n\nSelain itu, wortel juga kaya akan beta karoten, vitamin C, serat, dan lain-lain. Nutrisi dalam wortel dapat membantu menurunkan kadar kolesterol, menurunkan resiko diabetes, dan menurunkan resiko kanker.',
                'description_petunjuk_penyimpanan' => '1. Jangan mencuci atau mengupas wortel yang akan disimpan\n2. Buang bagian pucuk wortel\n3. Simpan wortel dalam kantung plastik\n4. Letakkan kantung plastik dalam wadah berisi air\n5. Simpan di dalam kulkas atau chiller\n6. Jauhkan dari buah atau sayur lainnya\n7. Ganti air setiap hari\n\nDengan penyimpanan yang benar, wortel bisa bertahan hingga 1 bulan',
            ],
        ];

        foreach ($dummyData as $productData) {
            $this->db->table('product')->insert($productData);
        }
    }
}
