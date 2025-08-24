<?php
header('Content-Type: application/json; charset=utf-8');
error_reporting(0);

include("opendb.php");
$pdo = openDB();

// Bounding Box aus GET übernehmen (optional)
$bbox = isset($_GET['bbox']) ? explode(',', $_GET['bbox']) : null;

$sql = "SELECT Latitude, Longitude, filename, name, category FROM sights";
$params = [];

if ($bbox && count($bbox) === 4) {
    // bbox = minLng, minLat, maxLng, maxLat
    $sql .= " WHERE Longitude BETWEEN ? AND ? AND Latitude BETWEEN ? AND ?";
    $params = [$bbox[0], $bbox[2], $bbox[1], $bbox[3]];
}

$stmt = $pdo->prepare($sql);
$stmt->execute($params);

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($rows, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);

?>
