<?php

if (!isset($_POST['save'])) {
    echo "Et tullut lomakkeelta.";
    die();
}

if ($_POST['password'] != $_POST['password_confirm']) {
    echo ('Salasanat eivät täsmää.');
        die();
}

$myfile = fopen("newfile.txt","a") or die("Unable to open file.");
$rivi = $_POST['first_name'] . ";" . $_POST['last_name'] . ";" . $_POST['password'] . PHP_EOL;
fwrite($myfile, $rivi);
fclose($myfile);

header("Location: show_names.php");
