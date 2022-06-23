<?php
/**
 * @var string $_image
 * @var string $_name
 * @var float $_price
 */
?>
<div class="col col-lg-4">
    <div class="card">
        <img src="<?php echo $_image; ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_name; ?>
            </h5>
            <p class="card-text">
                <?php echo $_price; ?>
            </p>
            <a href="#" class="btn btn-primary">View</a>
        </div>
    </div>
</div>
