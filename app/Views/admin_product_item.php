<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="px-64 flex flex-col gap-4">
    <div>
        <h1 class="text-3xl font-bold"><?= esc($product['name']) ?></h1>
    </div>
    <?= form_open('admin/product/' . esc($product['id']) . '/request') ?>
        <label class="form-control">
            <div class="flex flex-col my-2">
                <span class="label-text font-semibold">Jumlah Pesanan</span>
                <span class="label-text text-red-500 text-sm"> <?= validation_show_error('quantity') ?> </span>
            </div>
            <div class="flex flex-row gap-4">
                <input id="quantity" type="number" min=20 name="quantity" class="textarea textarea-bordered h-12 w-full" />
                <button class="btn btn-primary hover:btn-primary/50" type="submit">Pesan</button>
            </div>
        </label>
    <?= form_close() ?>

    <?= form_open('admin/product/' . esc($product['id'])) ?>
    <h2 class="card-title font-semibold text-base">Ubah detail produk</h2>
    <label class="form-control">
        <div class="flex flex-col my-2">
            <span class="label-text font-semibold">Harga</span>
            <span class="label-text text-red-500 text-sm"> <?= validation_show_error('price') ?> </span>
        </div>
        <input id="price" type="number" min=0 name="price" value="<?= $product['price'] ?>" class="textarea textarea-bordered h-12" />
        
        <div class="flex flex-col my-2">
            <span class="label-text font-semibold">Deskripsi Produk</span>
            <span class="label-text text-red-500 text-sm"> <?= validation_show_error('description') ?> </span>
        </div>
        <textarea id="description" name="description" value="<?= $product['description'] ?>" class="textarea textarea-bordered h-24"><?= $product['description'] ?></textarea>

        <div class="flex flex-col my-2">
            <span class="label-text font-semibold">Kandungan dan Nutrisi</span>
            <span class="label-text text-red-500 text-sm"> <?= validation_show_error('description_kandungan') ?> </span>
        </div>
        <textarea id="description_kandungan" name="description_kandungan" value="<?= $product['description_kandungan'] ?>" class="textarea textarea-bordered h-24"><?= $product['description_kandungan'] ?></textarea>
        
        <div class="flex flex-col my-2">
            <span class="label-text font-semibold">Petunjuk Penyimpanan</span>
            <span class="label-text text-red-500 text-sm"> <?= validation_show_error('description_petunjuk_penyimpanan') ?> </span>
        </div>
        <textarea id="description_petunjuk_penyimpanan" name="description_petunjuk_penyimpanan" value="<?= $product['description_petunjuk_penyimpanan'] ?>" class="textarea textarea-bordered h-24"><?= $product['description_petunjuk_penyimpanan'] ?></textarea>
    </label>

    <button class="btn btn-primary hover:btn-primary/50 w-full mt-4" type="submit">Ubah Detail</button>
    <?= form_close() ?>
</div>

<?= $this->endSection() ?>