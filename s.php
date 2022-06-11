<?php
header('Content-type: text/plain');
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
if (!empty($_GET['a'])) {
    $alias = strtolower($_GET['a']);
    if ((strlen($alias) < 3) || (strlen($alias) > 15)) {
        die('Your alias must be between 3 and 15 characters long!');
    }
}

$reservedpages = ['privacy', 'about', 'terms', 'contact', 'page', 'p', 'u', 'l', 'ourstory'];
foreach($reservedpages as $page) {
    if (strtolower($_GET['a']) == $page) {
        die('Sorry, your alias is reserved!');
    }
}
if (!empty($_GET['u'])) {
    if (substr($_GET['u'], 0, strlen($shorturl)) === $shorturl) {
        die('Oops, you can\'t shorten that URL!');
    }
    if (filter_var($_GET['u'], FILTER_VALIDATE_URL)) {
        if (!isset($alias)) {
            $id = getID();
            $stmt = $conn->prepare("INSERT INTO link (alias, url, ip) VALUES (?, ?, ?)");
            $url = ($_GET['u']);
            $stmt->bind_param('sss', $id, $url, $ip);
            $stmt->execute();
            echo $shorturl . $id;
        } else {
            $stmtcheckalias = $conn->prepare('SELECT * FROM link WHERE alias = ?');
            $stmtcheckalias->bind_param('s', $alias);
            $stmtcheckalias->execute();
            $rescheck0 = $stmtcheckalias->get_result();
            if (mysqli_num_rows($rescheck0) == 0) {
                $id = $alias;
                $stmt = $conn->prepare("INSERT INTO link (alias, url, ip) VALUES (?, ?, ?)");
                $url = ($_GET['u']);
                $stmt->bind_param('sss', $id, $url, $ip);
                $stmt->execute();
                echo $shorturl . $id;
            } else {
                die('Sorry, that alias is already taken!');
            }
        }
    } else {
        die("Error, invalid URL!");
    }

} else {
    die('Error, no URL!');
}
?>
