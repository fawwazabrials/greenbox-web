<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div>
    <h1 class="text-3xl font-bold mb-8">Order Details</h1>

    <div class="flex flex-col sm:flex-row gap-8">
        <div>
            <img src="/img/vegetable.jpg" alt="Gambar sayuran" width="450" height="450" class="object-cover rounded-lg shadow-xl">
        </div>

        <div>
            <?php foreach ($orders as $key => $value) : ?>
                <div class="flex flex-row justify-between">
                    <div class="flex flex-row gap-8">
                        <div class="flex flex-col">
                            <h1 class="text-3xl font-bold">Transaction
                                <a class="italic hover:not-italic" style="font-size: 15pt;"><?= "#" . $value->order_id ?></a>
                            </h1>
                        </div>
                    </div>

                    <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"><?= $value->deliveryStatus ?></a>
                </div>

                <p class="text-md text-slate-400"><?= $value->orderDate ?></p>

                <div>
                    <div>
                        <h2 class='font-semibold mt-4' style="font-size: 15pt;">Nama Pelanggan</h2>
                        <p style="font-size: 13pt;"><?= str_replace('\n', '<br/>', $value->customerName) ?></p>
                    </div>
                    <div>
                        <h2 class='font-semibold mt-4' style="font-size: 15pt;">Alamat Pelanggan</h2>
                        <p style="font-size: 13pt;"><?= str_replace('\n', '<br/>', $value->deliveryAddress) ?></p>
                    </div>

                    <div class="flex flex-row justify-between">
                        <div class="flex flex-row gap-14">
                            <div class="flex flex-col">
                                <h2 class='font-semibold mt-4' style="font-size: 15pt;">Jumlah</h2>
                                <p style="font-size: 13pt;"><?= $value->totalAmount ?></p>
                            </div>

                            <div class="flex flex-col">
                                <h2 class='font-semibold mt-4' style="font-size: 15pt;">Total Harga</h2>
                                <p style="font-size: 13pt;"><?= "Rp" . number_format((($value->totalAmount) * ($value->price)), 0, ',', '.') ?></p>
                            </div>
                        </div>
                    </div>

                    <div>
                        <h2 class='font-semibold mt-4 mb-6' style="font-size: 15pt;">Produk</h2>
                        <a class="bg-green-500 hover:bg-green-700 text-white font-semibold py-5 px-5 rounded" style="font-size: 13pt;"><?= $value->name ?></a>
                    </div>
                </div>
            <?php endforeach ?>
        </div>

    </div>
</div>

<?= $this->endSection() ?>