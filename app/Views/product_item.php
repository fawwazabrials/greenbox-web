<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <div class="flex flex-row gap-8">
        <div class="shrink-0">
            <img src="/img/vegetable.jpg" alt="Gambar sayuran" width="300" height="300" class="object-cover rounded-lg shadow-xl">
        </div>

        <div>
            <h1 class="text-3xl font-bold"><?= esc($product['name']) ?></h1>
            <p class="text-md text-slate-400"><?= esc($product['variant']) ?></p>
    
            <div>
                <div>
                    <h2 class='font-semibold mt-4'>Deskripsi Produk</h2>
                    <p><?= str_replace('\n', '<br/>', esc($product['description'])) ?></p>
                </div>
                <div>
                    <h2 class='font-semibold mt-4'>Kandungan dan Nutrisi</h2>
                    <p><?= str_replace('\n', '<br/>', esc($product['description_kandungan'])) ?></p>
                </div>
                <div>
                    <h2 class='font-semibold mt-4'>Petunjuk Penyimpanan</h2>
                    <p><?= str_replace('\n', '<br/>', esc($product['description_petunjuk_penyimpanan'])) ?></p>
                </div>
            </div>
        </div>

        <div class="card border border-slate-300 w-[1000px]">
            <div class="card-body">

                <?= form_open('product/'.esc($product['id'])) ?>
                    <!-- <input id="productId" name="productId" class='invisible' type="text" value="<?= esc($product['id']) ?>"> -->

                    <h2 class="card-title font-semibold text-base">Atur data pengiriman</h2>
                    <label class="form-control w-full max-w-xs">
                        <div class="flex flex-col mt-2">
                            <span class="label-text font-semibold">Namamu</span>
                            <span class="label-text text-red-500 text-sm"> <?= validation_show_error('customerName') ?> </span>
                        </div>
                        <input id="customerName" name="customerName" type="text" placeholder="Isi nama" class="input input-bordered w-full max-w-xs" />

                        <div class="flex flex-col mt-2">
                            <span class="label-text font-semibold">Alamatmu</span>
                            <span class="label-text text-red-500 text-sm"> <?= validation_show_error('deliveryAddress') ?> </span>
                        </div>
                        <textarea id="deliveryAddress" name="deliveryAddress" class="textarea textarea-bordered h-24" placeholder="Isi alamat pengiriman"></textarea>
                    </label>

                    <div class="divider"></div> 

                    <h2 class="card-title font-semibold text-base">Atur jumlah pengisian</h2>
                    <label>
                        <div class="flex flex-col mt-2">
                            <span class="label-text font-semibold">Kuantitas</span>
                            <span class="label-text text-red-500 text-sm"> <?= validation_show_error('totalAmount') ?> </span>
                        </div>
                        <input id="totalAmount" name="totalAmount" type="number" placeholder="0" class="input input-bordered w-full max-w-xs" />
                        <div>
                            <span class="label-text-alt"></span>
                            <span class="label-text-alt">Stok: <?= esc($product['stock']) ?></span>
                        </div>
                    </label>

                    <button class="btn btn-primary hover:btn-primary/50 w-full max-w-xs mt-4" type="submit">Beli</button>
                <?= form_close() ?>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>