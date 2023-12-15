<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <div>
        <h1 class="text-3xl font-bold">Product Management</h1>

        <div class="mt-8 grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-4">
            <?php foreach ($products as $product): ?>
                <div class="card shadow-xl <?= $product['stock'] <= 25 ? "bg-red-100" : "" ?>">
                    <div class="card-body">
                        <div>
                            <h2 class="card-title"><?= esc($product['name']) ?></h2>
                            <p class="text-sm text-slate-400"><?= esc($product['variant']) ?></p>
                        </div>

                        <div class="flex flex-row justify-between">
                            <div class="flex flex-row gap-8">
                                <div class="flex flex-col">
                                    <h3 class="font-semibold">Stok</h3>
                                    <p><?= esc($product['stock']) ?></p>
                                </div>
                            </div>
                            
                            <div class="flex flex-col">
                                <?php if($product['stock'] <= 25): ?>
                                    <span class="text-xs text-error">Stok sudah menipis! <br />Segeralah pesan baru</span>
                                <?php endif;?>
                                <a class="btn btn-primary btn-sm border-0 mt-1 px-8" href="">Pesan</a>
                            </div>
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