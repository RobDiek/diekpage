```php
<?php
$siteTitle = "DiekerIT";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <title><?php echo $siteTitle; ?></title>
</head>
<body>
    <nav id="navbar">
        <div class="nav-wrapper">
            <a href="../pages/home.php" class="brand-logo"><?php echo $siteTitle; ?></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="../pages/home.php">Home</a></li>
                <li><a href="../pages/about.php">About</a></li>
                <li><a href="../pages/services.php">Services</a></li>
                <li><a href="../pages/contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
    <script src="../js/main.js"></script>
    <script src="../js/responsive.js"></script>
</body>
</html>
```