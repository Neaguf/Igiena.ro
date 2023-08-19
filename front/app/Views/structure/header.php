<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/style.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/despre_noi.css') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>



    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            /* position: relative; */
            justify-content: space-between;
            align-items: center;
            background-color: #ffff;
            color: black;
            padding: 0.75% 5%;
            position: fixed;
            overflow: hidden;
            top: 0;
            width: 100%;
            z-index: 1000;


        }

        .brand-title img {
            width: 50px;
            height: 50px;
            flex-direction: column;
            align-items: flex-start;

        }

        .navbar-links {
            height: 100%;
            align-items: flex-end;
        }

        .navbar-links ul {
            display: flex;
            margin: 0;
            padding: 0;
        }

        .navbar-links li {
            list-style: none;
            transition: 0.3s ease;
            border-radius: 7.5%;
            display: flex;
            flex-direction: column;
            margin: auto 1rem;
        }

        .navbar-links li a {
            display: block;
            text-decoration: none;
            color: black;
            /* font-family: fantasy; */
        }

        .toggle-button {
            position: absolute;
            top: .75rem;
            right: 1rem;
            display: none;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
        }

        .toggle-button .bar {
            height: 3px;
            width: 100%;
            background-color: black;
            border-radius: 10px;
        }

        @media (min-width: 800px) {
            .navbar-top {
                display: none;
            }

            .navbar-links li:hover .bara-navbar {
                -webkit-transition: width .7s ease-in-out;
                -moz-transition: width .7s ease-in-out;
                -o-transition: width .7s ease-in-out;
                transition: width .7s ease-in-out;
                text-align: left;
                width: 100%;
            }

            .bara-navbar {
                border-bottom: 1.5px solid #D9C1A3;
                /* background:#c3c; */
                white-space: nowrap;
                display: inline-block;
                width: 0%;
            }
        }

        @media (max-width: 800px) {
            .navbar {
                flex-direction: column;
                align-items: flex-start;
                padding: 1.1% 5%;
            }

            .toggle-button {
                display: flex;
                margin: 10px;
            }

            .navbar-links {
                position: fixed;
                top: 0;
                right: -100%;
                bottom: 0;
                z-index: 9999;
                background-color: black;
                transition: right 0.3s ease-in-out;
                width: 100%;
            }

            .navbar-top img {
                width: 15%;
            }

            .navbar-top {
                display: flex;
                justify-content: space-between;
                margin: 4% 5%;
            }

            .navbar-top button {
                justify-self: end;
                background: transparent;
                border: none;
                font-size: 32px;
            }

            .navbar-links ul {
                margin-top: 7.5%;
                padding: 5%;
                width: 100%;
                flex-direction: column;
            }

            .navbar-links ul:hover {
                background-color: #000000;
            }

            .navbar-links ul li a {
                padding: .5rem 1rem;
                color: white;
            }

            .navbar-links.active {
                right: 0;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="brand-title"><img src="<?= base_url('public/assets/images/logo-mic.png') ?>" alt="logo"></div>
        <a class='toggle-button'>
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </a>


        <div class="navbar-links">
            <div class="navbar-top">
                <img src="<?= base_url('public/assets/images/logo-mic.png') ?>" alt="logo">
                <button class="close-button">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512">
                        <style>
                            svg {
                                fill: #d9c1a3
                            }
                        </style>
                        <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
                    </svg>
                </button>
            </div>
            <ul>
                <li>
                    <a class="nav-link" href="<?= base_url() ?>">Acasa</a>
                    <div class="bara-navbar"></div>
                </li>
                <li>
                    <a class="nav-link" href="<?= base_url('despre-noi') ?>">Despre Noi</a>
                    <div class="bara-navbar"></div>
                </li>
                <li>
                    <a class="nav-link" href="<?= base_url('saloane') ?>">Saloanele Igiena</a>
                    <div class="bara-navbar"></div>
                </li>
                <li>
                    <a class="nav-link" href="<?= base_url('academie') ?>">Academie Igiena</a>
                    <div class="bara-navbar"></div>
                </li>
                <li>
                    <a class="nav-link" href="<?= base_url('blog') ?>">Blog</a>
                    <div class="bara-navbar"></div>
                </li>
                <li>
                    <a class="nav-link" href="<?= base_url('evenimente') ?>">Evenimente si concursuri</a>
                    <div class="bara-navbar"></div>
                </li>
                <li>
                    <a class="nav-link" href="<?= base_url('contact') ?>">Contact</a>
                    <div class="bara-navbar"></div>
                </li>
            </ul>
        </div>

    </nav>
    <script>
        const toggleButton = document.getElementsByClassName('toggle-button')[0]
        const navbarLinks = document.getElementsByClassName('navbar-links')[0]

        toggleButton.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })

        document.addEventListener("DOMContentLoaded", function() {
            const closeButton = document.querySelector(".close-button");
            const navbarCollapse = document.querySelector(".navbar-links");

            closeButton.addEventListener("click", function() {
                navbarCollapse.classList.remove("active");
            });
        });
    </script>