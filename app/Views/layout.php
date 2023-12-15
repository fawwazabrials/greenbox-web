<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url()?>/assets/css/styles.css" rel="stylesheet">
    <title>GreenBox</title>
</head>
<body class="flex flex-col min-h-screen">
    <nav class="navbar bg-base-100 pl-[12px] lg:pl-[176px] pr-8 lg:pr-48">
        <a href="/" class="btn btn-ghost text-xl text-green-500">GreenBox</a>
    </nav>

    <div class="px-8 lg:px-48 my-4">
        <?= $this->renderSection('content') ?>
    </div>
</body>
</html>