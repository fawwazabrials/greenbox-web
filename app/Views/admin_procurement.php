<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div>
    <h1 class="text-3xl font-bold">Procurement Management</h1>

    <div class="overflow-x-auto mt-8">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th></th>
                    <th>Tanaman</th>
                    <th>Kuantitas</th>
                    <th>Tanggal</th>
                    <th>Monitor</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($procurements as $index => $procurement) : ?>
                    <tr>
                        <th><?= esc($index) + 1 ?></th>
                        <td><?= esc($procurement['name']) ?></td>
                        <td><?= esc($procurement['procuredQuantity']) ?></td>
                        <td><?= esc($procurement['procuredDate']) ?></td>
                        <td><a href="<?= esc($procurement['monitorUrl']) ?>" class="btn btn-ghost">Link</a></td>
                        <td class="text-xs">
                            <?php if ($procurement['isCompleted']) : ?>
                                <div class="badge badge-success text-xs text-white font-semibold">DONE</div>
                            <?php else : ?>
                                <div class="badge badge-warning text-xs text-white font-semibold">ONGOING</div>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?= $this->endSection() ?>