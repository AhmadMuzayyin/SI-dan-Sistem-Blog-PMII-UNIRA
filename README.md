<h1 align="center">Aplikasi SiBlogger</h1>
<p align="center">
<a href="https://pmiiunira.lfa-ppa.com" target="_blank"><img src="https://raw.githubusercontent.com/AhmadMuzayyin/SI-dan-Sistem-Blog-PMII-UNIRA/main/public/assets/img/logo_kom.png" width="90"></a></p>

<p align="center">
</p>

## About SiBlogger PMII UNIRA

SiBlogger adalah sebuah aplikasi yang bertujuan untuk mengenalkan PMII UNIRA dengan informasi tentang PMII UNIRA serta beberapa berita
yang diambil dari kegiatan-kegiatan PMII UNIA atau rayon yang ada dibawah naungan PMII UNIRA.

## Feture
- Halaman informasi tentang PMII Unira.
- Halaman Struktur Komisariat periode saat ini.
- Halaman Gallery yang menampilkan galeri kegiatan Komisariat dan Rayon.
- Halaman Blog yang menampilkan semua berita yang diupload oleh komisariat, semua rayon dibawah komisariat PMII UNIRA.

## Install
1. **Clone Repository**
```bash
git clone https://github.com/AhmadMuzayyin/SI-dan-Sistem-Blog-PMII-UNIRA.git
cd SI-dan-Sistem-Blog-PMII-UNIRA
composer install / composer update
cp .env.example .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan database yang ingin digunakan**

```bash
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

3. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

4. **Jalankan website**

```bash
php artisan serve
```
## Open this site in here

- **[SiBlogger](https://pmiiunira.lfa-ppa.com/)**
<p align="center"><a href="https://pmiiunira.lfa-ppa.com" target="_blank"><img src="https://raw.githubusercontent.com/AhmadMuzayyin/SI-dan-Sistem-Blog-PMII-UNIRA/main/public/assets/img/home.png" width="300"></a></p>

## Template Used

- [FlexStart](https://bootstrapmade.com/flexstart-bootstrap-startup-template/).
- [NiceAdmin](https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/).
