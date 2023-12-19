# Monolith

## Description

Greenbox adalah sebuah aplikasi penjualan produk-produk sayuran. Aplikasi ini akan berinteraksi dengan Single Service API yang sebelumnya sudah dibuat ([Github Repo](https://github.com/fawwazabrials/ssbackend-labpro)).

## Daftar Isi

-   [Technology Stack](#technology-stack)
-   [Requirements](#requirements)
-   [How To Run](#how-to-run)
-   [Created By](#created-by)

## Technology Stack

-   Codeigniter v4.4.3
-   Tailwind v3.3
-   MySQL v8.0.25
-   Nginx v1.25.3

## Requirements

Pastikan anda bisa menjalankan command `make`, silahkan ikutin [tutorial ini](https://leangaurav.medium.com/how-to-setup-install-gnu-make-on-windows-324480f1da69) untuk meng-install make. Jika menggunakan Docker, pastikan Docker sudah terinstall di mesin. Pastikan juga container [Tanamanku](https://github.com/fawwazabrials/tanamanku-web) sedang berjalan.

## How To Run

Terdapat 3 jenis cara yang bisa dilakukan untuk menjalankan aplikasi. Pilihan 1 adalah pilihan paling mudah dengan mengakses URL yang sudah dihosting di cloud server. Pilihan 2 adalah dengan menjalankan menggunakan Docker sehingga tidak perlu meng-konfigurasi database dan web server. Pilihan 3 adalah dengan menjalankan di localhost sendiri dengan bantuan XAMPP.

### 1. URL Cloud Deployment

Kunjungi website pada URL [http://34.101.177.128](http://34.101.177.128)

### 2. Setup Menggunakan Docker

1. Clone repository ini
2. Jalankan aplikasi docker
3. Jika belum, jalankan container [Tanamanku](https://github.com/fawwazabrials/tanamanku-web)
4. Ketik `make setup` pada Terminal / Command Prompt
5. Jika terdapat error pada bagian migration, jalankan `make migrate`
6. Kunjungi website pada url [localhost:8080](localhost:8080)
7. Matikan website dengan menjalani `make stop`
8. Jika website ingin dijalankan lagi, ketik `make run`

Bila tidak mempunyai Makefile, berikut adalah translasi command makefile ke command aslinya
| Makefile | Command |
|---------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| make build | docker-compose build --no-cache --force-rm |
| make run | docker-compose up -d |
| make composer-setup | composer install |
| make migrate | docker exec greenbox-web-greenbox-app-1 bash -c "yes | php spark migrate:refresh" || docker exec greenbox-web-greenbox-app-1 bash -c "php spark db:seed AllSeeder" |

### 3. Setup Menggunakan Lokal

1. Clone repository ini
2. Jalankan aplikasi XAMPP dan nyalakan Apache dan MySQL
3. Buatlah database dengan nama `greenbox_db`
4. Ubah isi `.env.example` dengan menggunakan konfigurasi untuk lokal
5. Duplikat `.env.example` kemudian rename menjadi `.env`
6. Ketik `composer install` pada Terminal / Command Prompt
7. Jalankan migrasi dan seeding dengan mengetik command `yes | php spark migrate:refresh || php spark db:seed AllSeeder`
8. Jika belum, jalankan localhost [Tanamanku](https://github.com/fawwazabrials/tanamanku-web)
9. Jalankan command `php spark serve` untuk menjalankan website
10. Kunjungi website pada url [localhost:8080](localhost:8080)
11. Jika website ingin dijalankan lagi, tidak perlu melakukan migrasi lagi

## Created by
| No | NIM      | Nama                |
|----|----------|---------------------|
| 1  | 18221051 | Luthfi Hanif        |
| 2  | 18221067 | Fawwaz Abrial Saffa |
| 3  | 18221071 | Ahmad Rizki         |
