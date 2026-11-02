<?php
/**
 * Semua isi linktree diatur dari file ini.
 * Link dengan 'url' kosong otomatis disembunyikan.
 */

$wa_number = '6283198892832';

function wa_link(string $number, string $text): string
{
    return 'https://wa.me/' . $number . '?text=' . rawurlencode($text);
}

return [
    'brand' => [
        'name'     => 'Mounthailand Coffee',
        'tagline'  => 'Robusta Grade 1 dari lereng Temanggung. Disortir tangan, rasa cokelat, asam rendah.',
        'location' => 'Temanggung, Jawa Tengah',
        'logo'     => 'assets/img/logo.webp',
    ],

    // Tombol utama, paling atas
    'primary' => [
        'label' => 'Pesan lewat WhatsApp',
        'note'  => 'Balas cepat di jam kerja',
        'icon'  => 'whatsapp',
        'url'   => wa_link($wa_number, 'Halo Mounthailand, saya mau pesan kopi.'),
    ],

    // Kartu produk, tap langsung chat WA dengan pesan terisi
    'products' => [
        [
            'name'  => 'Ground Robusta',
            'desc'  => 'Bubuk, siap seduh',
            'price' => 'Mulai Rp20.000',
            'image' => 'assets/img/ground.webp',
            'url'   => wa_link($wa_number, 'Halo, saya mau pesan Mounthailand Ground Robusta. Ukuran: '),
        ],
        [
            'name'  => 'Roasted Beans',
            'desc'  => 'Biji sangrai utuh',
            'price' => 'Tanya harga',
            'image' => 'assets/img/beans.webp',
            'url'   => wa_link($wa_number, 'Halo, saya mau pesan Mounthailand Roasted Coffee Beans. Ukuran: '),
        ],
    ],

    // Link lain
    'links' => [
        [
            'label' => 'Website resmi',
            'note'  => 'Cerita, galeri, dan daftar harga lengkap',
            'icon'  => 'globe',
            // TODO: isi URL website Mounthailand, contoh 'https://mounthailand.vercel.app'
            'url'   => '',
            'utm'   => true,
        ],
        [
            'label' => 'Shopee',
            'note'  => 'Checkout dengan gratis ongkir',
            'icon'  => 'bag',
            'url'   => '', // isi kalau sudah buka toko
        ],
        [
            'label' => 'Tokopedia',
            'note'  => 'Belanja lewat Tokopedia',
            'icon'  => 'bag',
            'url'   => '', // isi kalau sudah buka toko
        ],
        [
            'label' => 'Tanya stok & reseller',
            'note'  => 'Harga grosir untuk kedai dan reseller',
            'icon'  => 'handshake',
            'url'   => wa_link($wa_number, 'Halo Mounthailand, saya mau tanya soal kerja sama reseller / pembelian grosir.'),
        ],
        [
            'label' => 'Email',
            'note'  => 'halo.mounthailand@gmail.com',
            'icon'  => 'mail',
            'url'   => 'mailto:mounthailandcoffee@gmail.com',
        ],
    ],

    // Ikon sosial kecil di bawah
    'socials' => [
        ['label' => 'Instagram', 'icon' => 'instagram', 'url' => 'https://instagram.com/mounthailand_coffee.tmng'],
        ['label' => 'WhatsApp',  'icon' => 'whatsapp',  'url' => 'https://wa.me/' . $wa_number],
        ['label' => 'Email',     'icon' => 'mail',      'url' => 'mailto:mounthailandcoffee@gmail.com'],
        ['label' => 'TikTok',    'icon' => 'tiktok',    'url' => ''], // isi kalau ada
    ],
];
