<?php
include 'init.php';
function generateRandomString($length) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}
function getID() {
    global $conn;
    $id = generateRandomString(10);
    $checkres = $conn->query("SELECT * FROM link WHERE alias = '$id'");
    if (mysqli_num_rows($checkres) == 0) {
        return $id;
    } else {
        return getID();
    }
}
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip = $_SERVER['HTTP_CLIENT_IP'];
} elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ip = $_SERVER['REMOTE_ADDR'];
}
if (!empty($_GET['u'])) {
    if (substr($_GET['u'], 0, strlen($shorturl)) === $shorturl) {
        die('Oops, you can\'t shorten that URL!');
    }
    if (filter_var($_GET['u'], FILTER_VALIDATE_URL)) {
        $id = getID();
        $stmt = $conn->prepare("INSERT INTO link (alias, url, ip) VALUES (?, ?, ?)");
        $url = ($_GET['u']);
        $stmt->bind_param('sss', $id, $url, $ip);
        $stmt->execute();
        echo $shorturl . $id;
    } else {
        die("Error, invalid URL!");
    }

} else {
    die('Error, no URL!');
}
?>
