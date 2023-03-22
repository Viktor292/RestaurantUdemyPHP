 <?php
    $companyName = "Viktor's Fine Dining";
    include('includes/arrays.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo TITLE; ?></title>
    <link href="styles.css" rel="stylesheet">
</head>
<body id="final-example">
    <div class="wrapper">
        <div class="banner">
            <a href="/" title="Return to Home">
                <img src="img/banner.png" alt="Viktor's Fine Dining">
            </a>
        </div>
        <div id="nav">
            <?php
                include('includes/nav.php'); 
            ?>
        </div>
        <div class="content">