// This page will display the full name and the description of the user.

<?php
session_start();
require_once("../db.php");
?>

<?php
// Get the user fullname and description.
$fullname = "";
$description = "";

if (!isset($_SESSION['username'])) {
    header("Location: signin.php");
    exit();
} else {
    $result = db_query("SELECT fullname, description FROM accounts WHERE username = '" . $_SESSION['username'] . "'");
    if (count($result) > 0) {
        $fullname = $result[0]['fullname'];
        $description = $result[0]['description'];
    }
}
?>

<html lang="en">
    <body>
        <h1>Profile: <?= $_SESSION['username'] ?></h1>
        <div><p><strong>Fullname: </strong> <?= $fullname ?></p></div>
        <div><p><strong>Description: </strong> <?= $fullname ?></p></div>
        <?= $description ?>
    </body>
</html>