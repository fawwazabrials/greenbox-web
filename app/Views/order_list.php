<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div>
    <h1 class="text-3xl font-bold">Order List</h1>

    <div>
        <?php foreach ($orders as $key => $value) : ?>
            <div class="card shadow-xl">
                <div class="card-body">
                    <div class="flex flex-row justify-between">
                        <div class="flex flex-row gap-8">
                            <div class="flex flex-col">
                                <h2 class="card-title py-2" style="font-size: 20pt;"><?= $value->name ?></h2>
                            </div>
                        </div>

                        <!-- <a class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full"><?= $value->deliveryStatus ?></a> -->
                    </div>

                    <p class="text-sm text-slate-400"><?= $value->orderDate ?></p>

                    <p class="line-clamp-3 text-md font-semibold" style="font-size: 15pt;"><?= $value->customerName ?></p>
                    <p class="line-clamp-3 text-md font-light"><?= $value->deliveryAddress ?></p>

                    <div class="flex flex-row justify-between">
                        <div class="flex flex-row gap-8 pt-3">
                            <div class="flex flex-col">
                                <h3 class="font-semibold">Jumlah</h3>
                                <p><?= $value->totalAmount ?></p>
                            </div>

                            <div class="flex flex-col">
                                <h3 class="font-semibold">Total Harga</h3>
                                <p><?= "Rp" . number_format((($value->totalAmount) * ($value->price)), 0, ',', '.') ?></p>
                            </div>
                        </div>

                        <a class="btn btn-primary btn-sm border-0 mt-6 px-8" href="/admin/order/<?= $value->id ?>">Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>

    </div>
</div>
<?= $this->endSection() ?>