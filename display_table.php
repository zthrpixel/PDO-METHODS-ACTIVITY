<?php
require_once 'dbconfig.php';

$stmt = $pdo->query(
    'SELECT item_id, brand_name, product_name, category, price_aud, stock_quantity
     FROM grocery_items
     ORDER BY category, brand_name'
);

$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Australian Grocery Items</title>
        <style>
        body { font-family: Arial, sans-serif; margin: 24px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #3c3c3c; padding: 8px; text-align: left; }
        th { background: #00b7ff; }
        </style>
</head>

<body>
    <h2>Australian Grocery Items</h2>
    <table>
    <thead><tr>
    <th>ID</th><th>Brand</th><th>Product</th><th>Category</th><th>Price (AUD)</th><th>Stock</th>
    </tr></thead>
<tbody>

<?php foreach ($items as $item): ?>
<tr>
    <td><?= (int) $item['item_id'] ?></td>
    <td><?= htmlspecialchars($item['brand_name'], ENT_QUOTES, 'UTF-8') ?></td>
    <td><?= htmlspecialchars($item['product_name'], ENT_QUOTES, 'UTF-8') ?></td>
    <td><?= htmlspecialchars($item['category'], ENT_QUOTES, 'UTF-8') ?></td>
    <td><?= number_format((float) $item['price_aud'], 2) ?></td>
    <td><?= (int) $item['stock_quantity'] ?></td>
</tr>

<?php endforeach; ?>
</tbody>
</table>
</body></html>
