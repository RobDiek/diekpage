```php
<?php
include '../components/header.php';
include '../components/navbar.php';
?>

<div id="mainContent">
    <h1>Services</h1>
    <p>DiekerIT, spearheaded by Robin Dieker, a seasoned Microsoft expert, is a leading IT services company based in Germany. Currently affiliated with Crafting IT, Robin leverages his extensive experience and proficiency to elevate our offerings. Being a former Microsoft employee, Robin possesses unparalleled knowledge in Microsoft products, solutions, and processes.</p>
    <p>Our company specializes in infrastructure and client monitoring, backup solutions, and network monitoring. We primarily focus on Microsoft products, client management, and infrastructure monitoring.</p>
    <div id="serviceCards">
        <?php
        // This function will be defined in js/main.js
        echo "<script>loadServices()</script>";
        ?>
    </div>
</div>

<?php
include '../components/sidebar.php';
include '../components/footer.php';
?>
```