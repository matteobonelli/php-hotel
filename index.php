<?php include __DIR__ . '/Model/db.php'; ?>

<?php foreach ($hotels as $hotel) { ?>
    <div>Nome:
        <?php echo $hotel['name'] ?>
    </div>
    <div>Descrizione:
        <?php echo $hotel['description'] ?>
    </div>
    <div>Parcheggio:
        <?php echo $hotel['parking'] ?>
    </div>
    <div>Voto:
        <?php echo $hotel['vote'] ?>
    </div>
    <div>Distanza dal centro:
        <?php echo $hotel['distance_to_center'] ?>
    </div>
<?php } ?>