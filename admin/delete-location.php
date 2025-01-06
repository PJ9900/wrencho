<?php require_once('header.php'); ?>

<?php
if (!isset($_REQUEST['id'])) {
    header('location: logout.php');
    exit;
} else {
    // Check the id is valid or not
    $statement = $pdo->prepare("SELECT * FROM locations WHERE id=?");
    $statement->execute(array($_REQUEST['id']));
    $result = $statement->fetchAll(PDO::FETCH_ASSOC);
    foreach ($result as $row) {
        $banner = $row['banner_img'];
        $text = $row['text_img'];
    }

    $total = $statement->rowCount();
    if ($total == 0) {
        header('location: logout.php');
        exit;
    }
}
?>

<?php
// Delete from tbl_faq
$statement = $pdo->prepare("DELETE FROM locations WHERE id=?");
if ($statement->execute(array($_REQUEST['id']))) {
    unlink('assets/images/location/' . $banner);
    unlink('assets/images/location/' . $text);
}

header('location: locations.php');
?>