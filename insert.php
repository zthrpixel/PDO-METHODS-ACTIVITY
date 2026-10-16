<?php
require_once 'dbconfig.php';

$message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $stmt = $pdo->prepare(
        'INSERT INTO grocery_items
         (brand_name, product_name, category, price_aud, stock_quantity, country_origin)
         VALUES (:brand, :product, :category, :price, :stock, :origin)'
    );
    $stmt->execute([
        'brand' => 'Carman\'s',
        'product' => 'Sample Muesli Bar (PDO Insert Demo)',
        'category' => 'Snacks',
        'price' => 5.25,
        'stock' => 10,
        'origin' => 'Australia'
    ]);
    $message = 'Record inserted successfully. New item ID: ' . $pdo->lastInsertId();
}
?>
<!doctype html>
<html lang="en"><head><meta charset="utf-8"><title>PDO Insert Demo</title></head>
<body>
<h2>Insert a demo grocery record</h2>
<p>This inserts one clearly labelled sample record when you click the button.</p>
<form method="post">
  <button type="submit">Insert demo record</button>
</form>
<p><?= htmlspecialchars($message, ENT_QUOTES, 'UTF-8') ?></p>
</body></html>
