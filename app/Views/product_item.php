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
                <form action="/order" method="POST">
                    <h2 class="card-title font-semibold text-base">Atur data pengiriman</h2>
                    <label class="form-control w-full max-w-xs">
                        <div class="label">
                            <span class="label-text">Namamu</span>
                        </div>
                        <input id="customerName" name="customerName" type="text" placeholder="Isi nama" class="input input-bordered w-full max-w-xs" />

                        <div class="label">
                            <span class="label-text">Alamatmu</span>
                        </div>
                        <textarea id="deliveryAddress" name="deliveryAddress" class="textarea textarea-bordered h-24" placeholder="Isi alamat pengiriman"></textarea>
                    </label>

                    <div class="divider"></div> 

                    <h2 class="card-title font-semibold text-base">Atur jumlah pengisian</h2>
                    <label>
                        <div class="label">
                            <span class="label-text">Kuantitas</span>
                        </div>
                        <input id="totalAmount" name="totalAmount" type="number" placeholder="0" class="input input-bordered w-full max-w-xs" />
                        <div class="label">
                            <span class="label-text-alt"></span>
                            <span class="label-text-alt">Stok: <?= esc($product['stock']) ?></span>
                        </div>
                    </label>

                    <button class="btn w-full max-w-xs mt-4" type="submit">Beli</button>
                </form>
            </div>
        </div>
    </div>

<?= $this->endSection() ?>