<?php
function path()
{
    echo "http://localhost/wedigital/wrencho";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    //   echo $actual_link;exit;
    $host = $_SERVER['HTTP_HOST'];
    $currentURL = $_SERVER['REQUEST_URI'];
    if ($_SERVER['HTTPS'] != 'on') {
    ?>
        <script>
            window.location.href = "https://<?php echo $host . $currentURL ?>";
        </script>

    <?php
    }

    // echo "SELECT * FROM meta_tag WHERE page_name='$actual_link'";
    // exit;

    $query = "SELECT * FROM meta_tag WHERE page_name='$actual_link'";
    $meta_all = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($meta_all);
    ?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title><?php echo $row['meta_title']; ?></title>
        <meta name="description" content="<?php echo $row['meta_description']; ?>" />
        <meta name="keywords" content="<?php echo $row['meta_keyword']; ?>">

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="<?php path() ?>/lib/animate/animate.min.css" />
        <link href="<?php path() ?>/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="<?php path() ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="<?php path() ?>/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php path() ?>/css/style.css" rel="stylesheet">
    </head>