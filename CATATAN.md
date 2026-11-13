# Catatan Proyek

## Akun Admin

- Email: `root@root.com`
- Password: `root`

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

4. Buka aplikasi:

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

- Port Nginx secara default adalah `8080`.
- Jangan menggunakan `docker compose down -v` jika data database masih diperlukan karena opsi `-v` menghapus volume Docker.
- Jika port ingin diubah, atur `APP_PORT` di file `.env`, kemudian jalankan ulang container.
