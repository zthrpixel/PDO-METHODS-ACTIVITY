<?php
require_once 'dbconfig.php';

$stmt = $pdo->prepare('DELETE FROM grocery_items WHERE item_id = :item_id');
$stmt->execute(['item_id' => 107]);

if ($stmt->rowCount() > 0) {
    echo 'Demo record with item_id 107 deleted successfully.';
} else {
    echo 'No row deleted. The demo record may already be deleted.';
}
?>
