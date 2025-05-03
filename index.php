<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Scopri le opere di Rachele WHX, artista che crea pezzi esclusivi ed eleganti, trasformando ogni spazio con arte contemporanea unica.">
    <meta property="og:title" content="Rachele WHX | Arte e Design">
    <meta property="og:description" content="Scopri le opere uniche di Rachele WHX, artista che fonde creatività e design per trasformare ogni spazio.">
    <meta property="og:image" content="img/quadro1.jpg">
    <meta property="og:url" content="https://www.rachelewhx.com">
    <title>Rachele WHX | Home</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/quadri.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="preload" href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Open+Sans:wght@400;600;700&display=swap" as="style">
</head>

<?php include('header.php'); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <h1>Rachele WHX: Pittura e arti visive</h1>
            <p>Esplora le opere di Rachele WHX, dove creatività e innovazione si fondono per dar vita a pezzi esclusivi e unici. Ogni creazione è un'esperienza visiva che trasforma ogni spazio, portando un tocco di eleganza contemporanea e un'inconfondibile personalità artistica.</p>
            <a href="#" class="btn">Scopri i nostri quadri</a>
        </div>
        
        <div class="hero-gallery">
            <div class="gallery-track">
                <img src="img/quadro1.jpg" alt="Quadro 1" loading="lazy">
                <img src="img/quadro2.jpg" alt="Quadro 2" loading="lazy">
                <img src="img/quadro3.jpg" alt="Quadro 3" loading="lazy">
                <img src="img/quadro5.jpg" alt="Quadro 5" loading="lazy">
                <img src="img/quadro6.jpg" alt="Quadro 6" loading="lazy">
                <img src="img/quadro7.jpg" alt="Quadro 7" loading="lazy">
                <img src="img/quadro8.jpg" alt="Quadro 8" loading="lazy">
                <!-- Duplicati per loop continuo -->
                <img src="img/quadro1.jpg" alt="Quadro 1" loading="lazy">
                <img src="img/quadro2.jpg" alt="Quadro 2" loading="lazy">
                <img src="img/quadro3.jpg" alt="Quadro 3" loading="lazy">
                <img src="img/quadro5.jpg" alt="Quadro 5" loading="lazy">
                <img src="img/quadro6.jpg" alt="Quadro 6" loading="lazy">
                <img src="img/quadro7.jpg" alt="Quadro 7" loading="lazy">
                <img src="img/quadro8.jpg" alt="Quadro 8" loading="lazy">
            </div>
        </div>
    </div>
</section>

<?php include 'cards.php'; ?>
<?php include('footer.php'); ?>

<script>
    // Menu Toggle
    const menuToggle = document.getElementById('menuToggle');
    const menuLinks = document.getElementById('menuLinks');

    menuToggle.addEventListener('click', () => {
        menuToggle.classList.toggle('active');
        menuLinks.classList.toggle('active');
    });

    // Animazioni al caricamento
    document.addEventListener('DOMContentLoaded', () => {
        const heroText = document.querySelector('.hero-text');
        const heroGallery = document.querySelector('.hero-gallery');
        
        setTimeout(() => {
            heroText.style.opacity = '1';
            heroText.style.transform = 'translateY(0)';
            
            heroGallery.style.opacity = '1';
            heroGallery.style.transform = 'translateY(0)';
        }, 300);
    });
</script>
</body>
</html>
