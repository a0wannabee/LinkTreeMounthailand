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
        'tagline'  => 'Bermitra dengan petani biji kopi lokal yang sama dengan supplier coffee shop terkemuka di Jogja.',
        'location' => 'Magelang, Jawa Tengah',
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
            'price' => 'Mulai Rp20.000',
            'image' => 'assets/img/beans.webp',
            'url'   => wa_link($wa_number, 'Halo, saya mau pesan Mounthailand Roasted Coffee Beans. Ukuran: '),
        ],
    ],

    // Daftar harga (berlaku untuk Ground & Beans)
    'prices' => [
        ['size' => '100 gr',  'price' => 'Rp20.000'],
        ['size' => '250 gr',  'price' => 'Rp45.000'],
        ['size' => '500 gr',  'price' => 'Rp86.000'],
        ['size' => '1 kg',    'price' => 'Rp155.000'],
    ],
    'wholesale' => [
        'text' => 'Beli grosir minimal 1 kg? Harga khusus, chat admin.',
        'cta'  => 'Chat admin',
        'url'  => wa_link($wa_number, 'Halo admin Mounthailand, saya mau tanya harga grosir (minimal 1 kg).'),
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
            'note'  => 'Harga grosir min. 1 kg, chat admin',
            'icon'  => 'handshake',
            'url'   => wa_link($wa_number, 'Halo Mounthailand, saya mau tanya soal kerja sama reseller / pembelian grosir.'),
        ],
        [
            'label' => 'Email',
            'note'  => 'mounthailandcoffee@gmail.com',
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
