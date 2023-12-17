<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url() ?>/assets/css/styles.css" rel="stylesheet">
    <title>Greenbox</title>
</head>

<body class="flex flex-col min-h-screen">
    <?php $session = \Config\Services::session(); ?>
    <nav class="navbar bg-base-100 pl-[12px] lg:pl-[176px] pr-8 lg:pr-48">
        <div class="flex-1">
            <a href="/" class="btn btn-ghost text-xl text-green-500">GreenBox</a>
        </div>
        <?php if ($session->get('user_token') == 1) : ?>
            <div class="flex-none">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="/admin/product">Product</a></li>
                    <li><a href="/admin/procurement">Procurement</a></li>
                    <li><a href="/admin/order">Orders</a></li>
                    <li><a href="/admin/report">Report</a></li>
                </ul>
                <a class="btn btn-sm" href="/logout">Logout</a>
            </div>
        <?php else : ?>
            <div class="flex-none">
                <a class="btn btn-sm" href="/login">Login</a>
            </div>
        <?php endif; ?>
    </nav>

    <div class="px-8 lg:px-48 my-4">
        <?= $this->renderSection('content') ?>
    </div>
</body>

</html>