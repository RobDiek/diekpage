```php
<?php
$siteTitle = "DiekerIT";
$siteDescription = "DiekerIT, spearheaded by Robin Dieker, a seasoned Microsoft expert, is a leading IT services company based in Germany. Currently affiliated with Crafting IT, Robin leverages his extensive experience and proficiency to elevate our offerings. Being a former Microsoft employee, Robin possesses unparalleled knowledge in Microsoft products, solutions, and processes. Our company specializes in infrastructure and client monitoring, backup solutions, and network monitoring. We primarily focus on Microsoft products, client management, and infrastructure monitoring.";
?>

<div id="sidebar">
    <div class="sidebar-brand">
        <h2><?php echo $siteTitle; ?></h2>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li><a href="home.php" class="active">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </div>
</div>

<script src="../js/sidebar.js"></script>
```