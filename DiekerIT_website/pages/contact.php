<?php
include '../components/header.php';
include '../components/navbar.php';
?>

<div id="mainContent">
    <h1>Contact Us</h1>
    <p>Get in touch with DiekerIT, a leading IT services company based in Germany. We specialize in infrastructure and client monitoring, backup solutions, and network monitoring.</p>
    
    <form id="contactForm">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="text" id="email" name="email"><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message"></textarea><br>
        <input type="submit" value="Submit">
    </form>
</div>

<script src="../js/main.js"></script>
<script>
    document.getElementById('contactForm').addEventListener('submit', submitContactForm);
</script>

<?php
include '../components/footer.php';
?>