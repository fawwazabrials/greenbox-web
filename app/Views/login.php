<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?= base_url()?>/assets/css/styles.css" rel="stylesheet">
    <title>GreenBox</title>
</head>
<body class="flex flex-col min-h-screen justify-center justify-items-center">
    <div class="px-8 lg:px-48 my-4">
        <div class="card border border-slate-300 max-w-md">
            <div class="card-body">
                <h1 class="card-title">Login Karyawan</h1>
                <p class="text-slate-500">Silahkan login menggunakan akun karyawan-mu untuk mengakses dashboard!</p>

                <?= form_open('login') ?>
                    <label class="form-control">
                        <div class="flex flex-col mt-2">
                            <span class="label-text font-semibold">Email</span>
                            <span class="label-text text-red-500 text-sm"> <?= validation_show_error('email') ?> </span>
                        </div>
                        <input id="email" name="email" type="email" value="<?= set_value('email') ?>" placeholder="email@example.com" class="input input-bordered w-full mt-2" />
                        
                        <div class="flex flex-col mt-2">
                            <span class="label-text font-semibold">Password</span>
                            <span class="label-text text-red-500 text-sm"> <?= validation_show_error('password') ?> </span>
                        </div>
                        <input id="password" name="password" type="password" value="<?= set_value('password') ?>" placeholder="**********" class="input input-bordered w-full mt-2" />
                    </label>
                    <button class="btn btn-primary hover:btn-primary/50 mt-8 w-full">Login</button>

                <?= form_close() ?>
            </div>
        </div>        
    </div>
</body>
</html>