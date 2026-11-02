# Linktree Mounthailand Coffee

Halaman link-in-bio untuk Instagram [@mounthailand_coffee.tmng](https://instagram.com/mounthailand_coffee.tmng). PHP native, tanpa framework, tanpa database.

## Struktur

```
index.php        halaman utama
config.php       SEMUA isi link diatur di sini
icons.php        ikon SVG
assets/style.css tampilan
assets/img/      logo, foto produk, background
api/index.php    entry point Vercel
vercel.json      konfigurasi deploy Vercel
```

## Ubah isi link

Buka `config.php`. Link dengan `'url' => ''` otomatis disembunyikan, jadi Shopee, Tokopedia, atau TikTok tinggal diisi URL-nya kalau sudah ada.

Daftar harga ada di `'prices'`, info grosir di `'wholesale'`.

Yang perlu diisi dulu: **URL website** di bagian `'Website resmi'`.

## Jalankan lokal

```bash
php -S localhost:8000
```

Buka http://localhost:8000

## Deploy

- **Hosting PHP biasa (cPanel/shared hosting):** upload semua file ke `public_html`.
- **Vercel:** import repo ini di Vercel, `vercel.json` sudah siap (runtime `vercel-php`, sama seperti website utama).

Setelah online, pasang URL-nya di bio Instagram.
