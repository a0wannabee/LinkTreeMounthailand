<?php
declare(strict_types=1);

$config = require __DIR__ . '/config.php';
$icons  = require __DIR__ . '/icons.php';

function e(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

function icon(string $name): string
{
    global $icons;
    return $icons[$name] ?? $icons['link'];
}

function with_utm(array $link): string
{
    $url = $link['url'];
    if (empty($link['utm'])) {
        return $url;
    }
    $sep = str_contains($url, '?') ? '&' : '?';
    return $url . $sep . 'utm_source=instagram&utm_medium=linktree';
}

function is_external(string $url): bool
{
    return str_starts_with($url, 'http');
}

$visible  = fn(array $items) => array_values(array_filter($items, fn($i) => trim($i['url'] ?? '') !== ''));
$brand    = $config['brand'];
$primary  = $config['primary'];
$products = $visible($config['products']);
$links    = $visible($config['links']);
$socials  = $visible($config['socials']);
$year     = date('Y');
?>
<!doctype html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <title><?= e($brand['name']) ?> | Link</title>
    <meta name="description" content="<?= e($brand['tagline']) ?>">
    <meta name="theme-color" content="#0F0F0F">
    <meta property="og:title" content="<?= e($brand['name']) ?>">
    <meta property="og:description" content="<?= e($brand['tagline']) ?>">
    <meta property="og:image" content="<?= e($brand['logo']) ?>">
    <meta property="og:type" content="website">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css?v=1">
</head>
<body>
    <div class="bg" aria-hidden="true"></div>

    <main class="page">
        <header class="profile">
            <img class="logo" src="<?= e($brand['logo']) ?>" alt="Logo <?= e($brand['name']) ?>" width="96" height="96">
            <h1><?= e($brand['name']) ?></h1>
            <p class="tagline"><?= e($brand['tagline']) ?></p>
            <p class="location"><?= icon('pin') ?><span><?= e($brand['location']) ?></span></p>
        </header>

        <a class="btn btn-primary" href="<?= e($primary['url']) ?>" target="_blank" rel="noopener">
            <span class="btn-icon"><?= icon($primary['icon']) ?></span>
            <span class="btn-text">
                <strong><?= e($primary['label']) ?></strong>
                <small><?= e($primary['note']) ?></small>
            </span>
            <span class="btn-arrow"><?= icon('arrow') ?></span>
        </a>

        <?php if ($products): ?>
        <section class="products" aria-labelledby="products-title">
            <h2 id="products-title">Pilih kopimu</h2>
            <div class="product-grid">
                <?php foreach ($products as $p): ?>
                <a class="product" href="<?= e($p['url']) ?>" target="_blank" rel="noopener">
                    <img src="<?= e($p['image']) ?>" alt="<?= e($p['name']) ?>" width="120" height="120" loading="lazy">
                    <strong><?= e($p['name']) ?></strong>
                    <small><?= e($p['desc']) ?></small>
                    <span class="price"><?= e($p['price']) ?></span>
                </a>
                <?php endforeach; ?>
            </div>
        </section>
        <?php endif; ?>

        <nav class="links" aria-label="Link Mounthailand">
            <?php foreach ($links as $l): ?>
            <a class="btn" href="<?= e(with_utm($l)) ?>"<?= is_external($l['url']) ? ' target="_blank" rel="noopener"' : '' ?>>
                <span class="btn-icon"><?= icon($l['icon']) ?></span>
                <span class="btn-text">
                    <strong><?= e($l['label']) ?></strong>
                    <?php if (!empty($l['note'])): ?><small><?= e($l['note']) ?></small><?php endif; ?>
                </span>
                <span class="btn-arrow"><?= icon('arrow') ?></span>
            </a>
            <?php endforeach; ?>
        </nav>

        <?php if ($socials): ?>
        <ul class="socials">
            <?php foreach ($socials as $s): ?>
            <li>
                <a href="<?= e($s['url']) ?>" aria-label="<?= e($s['label']) ?>"<?= is_external($s['url']) ? ' target="_blank" rel="noopener"' : '' ?>>
                    <?= icon($s['icon']) ?>
                </a>
            </li>
            <?php endforeach; ?>
        </ul>
        <?php endif; ?>

        <footer class="foot">© <?= $year ?> <?= e($brand['name']) ?></footer>
    </main>
</body>
</html>
