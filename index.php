<?php
include __DIR__ . '/partials/header.php';

$counter = 0;

function park_filter($hotel)
{
    $parking = $_GET['parking'];
    return $parking === 'all' || $hotel['parking'] == $parking;
}
function rating_filter($hotel)
{
    $vote = $_GET['vote'];
    return $vote === 'all' || $hotel['vote'] >= $vote;
}

if (isset($_GET['parking'])) {
    $hotels = array_filter($hotels, 'park_filter');

}

if (isset($_GET['vote'])) {
    $hotels = array_filter($hotels, 'rating_filter');
}
// var_dump($hotels);
?>
<table class="table text-center container">
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
                <td class="text-light <?php echo $hotel['parking'] ? 'bg-success' : 'bg-danger'; ?>">
                    <?php echo $hotel['parking'] ? 'Si' : 'No'; ?>
                </td>
                <td>
                    <?php
                    for ($i = 0; $i < $hotel['vote']; $i++) {
                        echo "<i class='fa-solid fa-star text-warning'></i>";
                    } ?>
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