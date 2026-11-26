# Website Konveksi Cosmos



## Menjalankan Proyek dengan Docker Compose

Semua perintah berikut dijalankan dari direktori utama proyek.

### Menjalankan untuk pertama kali

1. Build dan jalankan container:

   ```bash
   docker compose up -d --build
   ```

2. Instal dependency frontend ke volume Node:

   ```bash
   docker compose run --rm --no-deps node-konveksi-web npm ci
   docker compose restart node-konveksi-web
   ```

3. Jalankan migrasi database:

   ```bash
   docker compose exec app-konveksi-web php artisan migrate --no-interaction
   ```
4. Install dependecy pada docker:

    ```bash
    docker compose exec -u root app-konveksi-web composer install
    ```
5. Buat symbolic link untuk file gambar yang disimpan pada public storage, lalu bersihkan cache konfigurasi:

    ```bash
    docker compose exec app-konveksi-web php artisan storage:link
    docker compose exec app-konveksi-web php artisan optimize:clear
    ```
6. Buat user baru untuk login:
    ```bash
    docker compose exec app-konveksi-web php artisan make:filament-user
    ```

7. Buka aplikasi:

   - Website: <http://localhost:8080>
   - Admin: <http://localhost:8080/admin>
   - Vite: <http://localhost:5173>



### Penggunaan sehari-hari

Jalankan container:

```bash
docker compose up -d
```

Lihat status container:

```bash
docker compose ps
```

Lihat log semua container:

```bash
docker compose logs -f
```

Lihat log service tertentu:

```bash
docker compose logs -f nginx-konveksi-web
docker compose logs -f app-konveksi-web
docker compose logs -f node-konveksi-web
```

Hentikan dan hapus container tanpa menghapus data database:

```bash
docker compose down
```

Build ulang setelah mengubah `Dockerfile` atau dependency Composer:

```bash
docker compose up -d --build
```

### Perintah Laravel di dalam container

```bash
docker compose exec app-konveksi-web php artisan migrate
docker compose exec app-konveksi-web php artisan optimize:clear
docker compose exec app-konveksi-web php artisan route:list
```

### Catatan penting

konfigurasi di file .env

```bash
DB_CONNECTION=mysql
DB_HOST=db-konveksi-web
DB_PORT=3306
DB_DATABASE=db_konveksi
DB_USERNAME=user-app
DB_PASSWORD=secret_konveksi
```

- Port Nginx secara default adalah `8080`.
- Jangan menggunakan `docker compose down -v` jika data database masih diperlukan karena opsi `-v` menghapus volume Docker.
- Jika port ingin diubah, atur `APP_PORT` di file `.env`, kemudian jalankan ulang container.

### Sinkronisasi gambar katalog antar-laptop

File gambar yang diunggah melalui Filament disimpan secara lokal dan tidak dimasukkan ke Git. Agar gambar katalog dapat ditampilkan pada laptop lain:

1. Salin folder berikut dari laptop yang memiliki file gambar ke lokasi yang sama pada laptop tujuan:

    ```text
    storage/app/public/katalog
    storage/app/public/katalog_bahan
    storage/app/public/kategori
    ```

2. Pastikan database pada laptop tujuan menyimpan path gambar yang sama dengan nama file yang telah disalin. Contoh:

    ```text
    katalog/nama-file.jpg
    katalog_bahan/nama-file.png
    kategori/nama-file.jpg
    ```

3. Buat ulang symbolic link dan bersihkan cache konfigurasi pada laptop tujuan:

    ```bash
    docker compose exec app-konveksi-web php artisan storage:link
    docker compose exec app-konveksi-web php artisan optimize:clear
    ```

