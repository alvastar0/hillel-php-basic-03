<?php

require_once __DIR__.'/../functions/alerts.php';

$alerts = get_alerts();
?>

<?php if (!empty($alerts)): ?>

    <section class="alerts">

        <?php foreach ($alerts as $alert): ?>

            <p class="<?php echo $alert['type'] ?>">
                <?php echo $alert['text']; ?>
            </p>

        <?php endforeach; ?>

    </section>

    <?php flush_alerts(); ?>
<?php endif; ?>
