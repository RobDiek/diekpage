```php
<?php
$carouselImages = array(
    "assets/images/banner.jpg",
    "assets/images/about.jpg",
    "assets/images/services.jpg",
    "assets/images/contact.jpg"
);
?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <?php
        for ($i = 0; $i < count($carouselImages); $i++) {
            echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $i . '"' . ($i == 0 ? ' class="active"' : '') . '></li>';
        }
        ?>
    </ol>
    <div class="carousel-inner">
        <?php
        for ($i = 0; $i < count($carouselImages); $i++) {
            echo '<div class="carousel-item' . ($i == 0 ? ' active' : '') . '">';
            echo '<img class="d-block w-100" src="' . $carouselImages[$i] . '" alt="Slide ' . ($i + 1) . '">';
            echo '</div>';
        }
        ?>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
```