<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title><?= $this->renderSection('pagetitle') ?></title>
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
</head>


<header class="bg-primary text-white p-3">
    <div class="container">
        <h1>My Simple CI4 Layout</h1>
        <nav class="nav">
            <a class="nav-link text-white" href="<?= base_url('/') ?>">Home</a>
            <a class="nav-link text-white" href="<?= base_url('/about') ?>">About</a>
            <a class="nav-link text-white" href="<?= base_url('/contact') ?>">About</a>
        </nav>
    </div>
</header>