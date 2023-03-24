<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mySpace</title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <nav class="navbar navbar-expand-lg position-absolute py-4 nav-color">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><i class="fas fa-user-astronaut"></i> MySpace</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <a href="#" class="nav-link">Home</a>
                    <a href="about.html" class="nav-link">About Us</a>
                    <a href="gallery.html" class="nav-link">Gallery</a>
                    <a href="contact.html" class="nav-link">Contact</a>
                </ul>
            </div>
        </div>
    </nav>

    <header class="header">
        <div class="hero-img">
            <div class="hero-text">
                <h1 class="text">Hello, this is My<span class="hero-span">Special</span> place.</h1>
                <p><span class="text-border">The universe wants to be noticed. But we also want to be noticed by the universe, we want the universe not to give a shit what happens to us</span></p>
            </div>
        </div>
        </header>