```php
<?php
include '../components/header.php';
include '../components/navbar.php';
?>

<div id="mainContent">
    <h1><?php echo $siteTitle; ?></h1>
    <p><?php echo $siteDescription; ?></p>
    <img src="../assets/images/banner.jpg" alt="Company Banner">

    <section>
        <h2>About DiekerIT</h2>
        <p>DiekerIT, spearheaded by Robin Dieker, a seasoned Microsoft expert, is a leading IT services company based in Germany. Currently affiliated with Crafting IT, Robin leverages his extensive experience and proficiency to elevate our offerings. Being a former Microsoft employee, Robin possesses unparalleled knowledge in Microsoft products, solutions, and processes.</p>
        <img src="../assets/images/about.jpg" alt="About Image">
    </section>

    <section>
        <h2>Our Services</h2>
        <p>Our company specializes in infrastructure and client monitoring, backup solutions, and network monitoring. We primarily focus on Microsoft products, client management, and infrastructure monitoring.</p>
        <div id="serviceCards"></div>
    </section>
</div>

<?php
include '../components/sidebar.php';
include '../components/footer.php';
?>
<script src="../js/main.js"></script>
<script src="../js/responsive.js"></script>
```
