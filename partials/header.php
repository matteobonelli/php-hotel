<?php
include __DIR__ . '/../Model/db.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
        integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>

<body>
    <header class="bg-body-tertiary">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.php">Migliori Hotel di Zona</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <form class="d-flex" role="select">
                    <select class="form-select me-2" type="select" name="parking">
                        <option value="all">Tutti gli Hotel</option>
                        <option value="1">Hotel con parcheggio</option>
                        <option value="0">Hotel senza parcheggio</option>
                    </select>
                    <select class="form-select me-2" type="select" name="vote">
                        <option value="all">Tutti gli Hotel</option>
                        <option value="1">1 Stella o più</option>
                        <option value="2">2 Stelle o più</option>
                        <option value="3">3 Stelle o più</option>
                        <option value="4">4 Stelle o più</option>
                        <option value="5">5 Stelle</option>
                    </select>
                    <button class="btn btn-primary" type="submit">Cerca</button>
                </form>
            </div>
            </div>
        </nav>
    </header>