<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(100);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
    <div class="pagination join">
        <?php foreach ($pager->links() as $link) : ?>
            <a href="<?= $link['uri'] ?>" class="join-item btn <?= $link['active'] ? 'btn-active' : '' ?>"><?= $link['title'] ?></a>
		<?php endforeach ?>
    </div>
</nav>
