<?php
require_once 'dbconfig.php';

$stmt = $pdo->prepare(
    'UPDATE grocery_items SET price_aud = :price WHERE item_id = :item_id'
);
$stmt->execute(['price' => 5.70, 'item_id' => 76]);

if ($stmt->rowCount() > 0) {
    echo 'Price updated successfully for item_id 76.';
} else {
    echo 'No changed row. The item may be missing or already have this price.';
}
?>
