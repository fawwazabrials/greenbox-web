<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div>
    <h1 class="text-3xl font-bold">Reports</h1>
    <?php
    $sum = 0;
    foreach ($orders as $key => $value) {
        $sum += (($value->amount) * ($value->price));
    }
    echo $sum;
    ?>

    <?php
    $count = 0;
    foreach ($orders as $key => $value) {
        $count += $value->countOrder;
    }
    echo $count;
    ?>

    <?php
    $order = 0;
    foreach ($orders as $key => $value) {
        if ($value->countOrder > $order) {
            $productName = $value->name;
            $order = $value->countOrder;
        }
    }
    echo $productName;
    ?>


    <div class="containerReport">
        <div class="containerReport-details">
            <img src="/img/cash.png" alt="Gambar sayuran" width="75" height="80">
            <h2 class="card-title py-2" style="font-size: 20pt;">Total Pendapatan</h2>
            <p style="font-size: 15pt;"><?= "Rp" . number_format($sum, 0, ',', '.') ?></p>
        </div>
        <div class="containerReport-details">
            <img src="/img/cart.png" alt="Gambar sayuran" width="75" height="80">
            <h2 class="card-title py-2" style="font-size: 20pt;">Jumlah Pemesanan</h2>
            <p style="font-size: 15pt;"><?= $count ?></p>
        </div>
        <div class="containerReport-details">
            <img src="/img/vegetableIcons.png" alt="Gambar sayuran" width="75" height="80">
            <h2 class="card-title py-2" style="font-size: 20pt;">Penjualan Terbanyak</h2>
            <p style="font-size: 15pt;"><?= $productName ?></p>
        </div>
    </div>

    <div class="containerReport mt-6">

        <table cellpadding="4" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Jumlah Pemesanan</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($orders as $key => $value) : ?>
                    <tr>
                        <td><?= $value->productId ?></td>
                        <td><?= $value->name ?></td>
                        <td><?= $value->price ?></td>
                        <td><?= $value->countOrder ?></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>


    </div>
    <?= print_r($orders) ?>
</div>
<?= $this->endSection() ?>