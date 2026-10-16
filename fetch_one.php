<?php
require_once 'dbconfig.php';

$stmt = $pdo->prepare(
    'SELECT item_id, brand_name, product_name, category, price_aud
     FROM grocery_items
     WHERE item_id = :item_id'
);
$stmt->execute(['item_id' => 1]);
$item = $stmt->fetch(PDO::FETCH_ASSOC);

echo '<h2>fetch one record</h2>';
echo '<pre>';
print_r($item);
echo '</pre>';
?>
