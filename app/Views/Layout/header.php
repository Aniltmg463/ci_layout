<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $this->renderSection('pagetitle') ?></title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url('assets/style.css') ?>">

</head>

<body>
    <header class="bg-primary text-white p-3">
        <div class="container">

            <nav class="nav ms-auto justify-content-end">
                <a class="nav-link text-white" href="<?= base_url('/') ?>">Home</a>
                <a class="nav-link text-white" href="<?= base_url('/about') ?>">About</a>
                <a class="nav-link text-white" href="<?= base_url('/contact') ?>">About</a>
                <a class="nav-link text-white" href="<?= base_url('/signup') ?>">Sign Up</a>
                <a class="nav-link text-white" href="<?= base_url('/login') ?>">Login</a>
            </nav>
        </div>
    </header>
    <div class="d-flex flex-column min-vh-100">