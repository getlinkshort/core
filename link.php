<?php
include 'init.php';
if (empty($_GET['id'])) {
    die("Error, no link passed!");
}
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    echo $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    echo $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    echo $ip = $_SERVER['REMOTE_ADDR'];
}
$stmt = $conn->prepare('SELECT * FROM link WHERE alias = ?');
$stmt->bind_param('s', $_GET['id']);
$stmt->execute();
$res = $stmt->get_result();
if (mysqli_num_rows($res) == 0) {
    echo "Link not found";
}
while ($row = mysqli_fetch_assoc($res)) {
    $istmt = $conn->prepare('INSERT INTO click (linkid, ip) VALUES (?, ?)');
    $istmt->bind_param('ss', $row['id'], $ip);
    $istmt->execute();
    header('Location: ' . $row['url']);
    exit;
}
