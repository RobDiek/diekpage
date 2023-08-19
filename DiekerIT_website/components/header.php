```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $siteTitle; ?></title>
    <meta name="description" content="<?php echo $siteDescription; ?>">
    <link rel="stylesheet" href="/css/styles.css">
    <link rel="stylesheet" href="/css/responsive.css">
</head>
<body>
    <header>
        <div id="navbar">
            <?php include 'navbar.php'; ?>
        </div>
        <div class="header-content">
            <img src="<?php echo $siteLogo; ?>" alt="DiekerIT Logo">
            <h1><?php echo $siteTitle; ?></h1>
            <p><?php echo $siteDescription; ?></p>
        </div>
    </header>
    <main id="mainContent">
```