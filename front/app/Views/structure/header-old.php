<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/despre_noi.css') ?>">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="css/mdb.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fasthand&display=swap" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Infant:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> -->
    <title>Igiena</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light nb">
        <div class="container">
            <a class="navbar-brand logo" href="#">
                <img src="<?= base_url('public/assets/images/logo-mic.png') ?>" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="content">
                    <div class="navbar-top">
                        <img src="<?= base_url('public/assets/images/logo-mic.png') ?>" alt="logo">
                        <button class="close-button"><i class="fas fa-times"></i></button>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url() ?>">Acasa</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('despre-noi') ?>">Despre noi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Saloanele Igiena</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Academie Igiena</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('contact') ?>">Contat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const closeButton = document.querySelector(".close-button");
            const navbarCollapse = document.querySelector(".navbar-collapse");

            closeButton.addEventListener("click", function() {
                navbarCollapse.classList.remove("show"); // Remove the "show" class to close the collapsed navbar
            });
        });
    </script>