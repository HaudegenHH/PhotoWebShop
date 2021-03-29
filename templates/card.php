<div class="card">
    <div class="card-title"><?= $row['title'] ?></div>
    <img src="http://placekitten.com/280/180" alt="kitten" class="card-img-top">
    <div class="card-body">
        <?= $row['description'] ?>
        <hr>
        <?= $row['price'] / 100 ?> €
    </div>
    <div class="card-footer">
        <a href="" class="btn btn-primary btn-sm">Details</a>
        <a href="" class="btn btn-success btn-sm">In den Warenkorb</a>
    </div>
</div> 