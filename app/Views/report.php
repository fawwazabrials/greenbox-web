<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div>
    <h1 class="text-3xl font-bold">Reports</h1>

    <div class="card shadow-xl">
        <div class="card-body">
            <div class="grid gap-8 my-5" style="grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));">
                <div class="rounded-md w-250 h-150 flex flex-col justify-center items-center bg-green-400">
                    <?php
                    $totalIncome = 0;
                    foreach ($orders as $key => $value) {
                        $totalIncome += (($value->amount) * ($value->price));
                    }
                    ?>
                    <img src="/img/cash.png" alt="Gambar keranjang" width="75" height="80">
                    <h2 class="card-title py-2" style="font-size: 20pt;">Total Pendapatan</h2>
                    <p class="italic hover:not-italic" style="font-size: 15pt;"><?= "Rp" . number_format($totalIncome, 0, ',', '.') ?></p>
                </div>
                <div class="rounded-md w-250 h-150 flex flex-col justify-center items-center bg-green-400">
                    <?php
                    $orderCount = 0;
                    foreach ($orders as $key => $value) {
                        $orderCount += $value->countOrder;
                    }
                    ?>
                    <img src="/img/cart.png" alt="Gambar keranjang" width="75" height="80">
                    <h2 class="card-title py-2" style="font-size: 20pt;">Jumlah Pemesanan</h2>
                    <p class="italic hover:not-italic" style="font-size: 15pt;"><?= $orderCount ?></p>
                </div>
                <div class="rounded-md w-250 h-150 flex flex-col justify-center items-center bg-green-400">
                    <?php
                    $topOrder = 0;
                    foreach ($orders as $key => $value) {
                        if ($value->countOrder > $topOrder) {
                            $topProduct = $value->name;
                            $topOrder = $value->countOrder;
                        }
                    }
                    ?>
                    <img src="/img/vegetableIcons.png" alt="Gambar sayuran" width="75" height="80">
                    <h2 class="card-title py-2" style="font-size: 20pt;">Penjualan Terbanyak</h2>

                    <?php if ($orderCount > 0) { ?>
                        <p class="italic hover:not-italic" style="font-size: 15pt;"><?= $topProduct ?></p>
                    <?php } else { ?>
                        <p class="italic hover:not-italic" style="font-size: 15pt;">Tidak ada penjualan</p>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="card shadow-xl">
        <div class="card-body">
            <div class="flex flex-col py-4">
                <div class="flex flex-row justify-between gap-4">

                    <div class="flex flex-row">
                        <div class="flex flex-col">
                            <div class="rounded-lg flex flex-col justify-center items-center bg-green-400 px-4">
                                <h2 class="card-title py-4" style="font-size: 20pt;">Penjualan Per Produk</h2>
                            </div>
                        </div>
                    </div>

                    <img src="/img/vegetableIcons2.png" alt="Gambar sayuran" width="50" height="50">
                </div>

                <?php if ($orderCount > 0) { ?>
                    <div class="-m-1.5 overflow-x-auto mt-4">
                        <div class="p-1.5 min-w-full inline-block align-middle">
                            <div class="border rounded-lg overflow-hidden dark:border-gray-700">
                                <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                                    <thead class="bg-green-50 dark:bg-green-400">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium" style="font-size: 14pt;">ID</th>
                                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium" style="font-size: 14pt;">Nama</th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium" style="font-size: 14pt;">Harga</th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium" style="font-size: 14pt;">Jumlah Pemesanan</th>
                                            <th scope="col" class="px-6 py-3 text-center text-xs font-medium" style="font-size: 14pt;">Jumlah Penjualan</th>
                                        </tr>
                                    </thead>
                                    <tbody class="divide-y divide-gray-200 dark:divide-gray-700">
                                        <?php foreach ($orders as $key => $value) : ?>
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-center" style="font-size: 12pt;"><?= $value->productId ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm" style="font-size: 12pt;"><?= $value->name ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-center" style="font-size: 12pt;"><?= "Rp" . number_format(($value->price), 0, ',', '.') ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-center" style="font-size: 12pt;"><?= $value->countOrder ?></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-center" style="font-size: 12pt;"><?= $value->amount ?></td>
                                            </tr>
                                        <?php endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <p class="text-center italic hover:not-italic mt-4" style="font-size: 15pt;">Tidak ada penjualan</p>
                <?php } ?>

            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>