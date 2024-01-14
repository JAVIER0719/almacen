<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-compatible" content="ie=edge">
    <title>Sistema de ventas</title>
    <link rel="stylesheet" href="<?php echo URL . RQ ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo URL . RQ ?>css/bootstrap.css" />
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3"
            style="border-bottom: 3px solid #d6d5d5 !important;">
            <div class="container">

                <a class="navbar-brand"><img src="<?php echo URL . RQ ?>/img/icons/logo.png"
                        class="mx-auto w-25 imglogo">Long-TASH</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>

                </button>

                <div class="navbar-collapse collapse d-sm-inline-flex flex-sm-row-reverse">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link text-dark" title="Manage">Hello</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark" title="Manage">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a href="<?php echo URL ?>User/Register" class="nav-link text-dark">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark">Login</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav flex-grow-1">
                        <li class="nav-item">
                            <a class="nav-link text-dark">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-dark">User</a>
                        </li>
                    </ul>
                </div>
            </div>

        </nav>

    </header>