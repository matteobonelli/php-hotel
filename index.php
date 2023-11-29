<?php
include __DIR__ . '/partials/header.php';

$counter = 0;
?>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Parcheggio</th>
            <th scope="col">Voto</th>
            <th scope="col">Distanza dal Centro</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($hotels as $hotel) { ?>
            <tr>
                <th scope="row">
                    <?php echo $counter += 1 ?>
                </th>
                <td>
                    <?php echo $hotel['name'] ?>
                </td>
                <td>
                    <?php echo $hotel['description'] ?>
                </td>
                <td>
                    <?php if ($hotel['parking']) {
                        echo 'Si';
                    } else {
                        echo 'No';
                    } ?>
                </td>
                <td>
                    <?php echo $hotel['vote'] ?>
                </td>
                <td>
                    <?php echo $hotel['distance_to_center'] . ' km' ?>
                </td>
            </tr>
        <?php } ?>

    </tbody>
</table>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>

</html>