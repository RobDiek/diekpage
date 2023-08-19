```php
<?php
function createCard($title, $description, $image) {
    return '
    <div class="card">
        <img src="'.$image.'" alt="'.$title.'" class="card-img-top">
        <div class="card-body">
            <h5 class="card-title">'.$title.'</h5>
            <p class="card-text">'.$description.'</p>
            <a href="#" class="btn btn-primary">Learn More</a>
        </div>
    </div>
    ';
}
?>
```