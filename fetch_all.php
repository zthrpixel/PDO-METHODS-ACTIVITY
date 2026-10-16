<?php
require_once 'dbconfig.php';

$stmt = $pdo->query(
    'SELECT item_id, brand_name, product_name, category, price_aud
     FROM grocery_items
     ORDER BY brand_name, product_name
     LIMIT 15'
);
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<h2>fetchAll (first 15 records)</h2>';
echo '<pre>';
print_r($items);
echo '</pre>';
?>
