<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div>
    <h1 class="text-3xl font-bold">Product Purchase</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">
        <?php foreach ($products as $product) : ?>
            <div class="card shadow-xl">
                <div class="card-body">
                    <div>
                        <h2 class="card-title"><?= esc($product['name']) ?></h2>
                        <p class="text-sm text-slate-400"><?= esc($product['variant']) ?></p>
                    </div>
                    <p class="line-clamp-3 text-md font-light"><?= esc($product['description']) ?></p>

                    <div class="flex flex-row justify-between">
                        <div class="flex flex-row gap-8">
                            <div class="flex flex-col">
                                <h3 class="font-semibold">Stok</h3>
                                <p><?= esc($product['stock']) ?></p>
                            </div>

                            <div class="flex flex-col">
                                <h3 class="font-semibold">Harga</h3>
                                <p><?= "Rp" . number_format($product['price'], 0, ',', '.') ?></p>
                            </div>
                        </div>

                        <a class="btn btn-primary btn-sm border-0 mt-4 px-8" href="/product/<?= $product['id'] ?>">Beli</a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
    <div class="mt-8">
        <?= $pager->links() ?>
    </div>
</div>
<?= $this->endSection() ?>