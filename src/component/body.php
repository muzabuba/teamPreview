<?php
    $start = include(__DIR__ . '/section/start.php'); 
    $promo = include(__DIR__ . '/section/promo.php');
    $promoWelcome = include(__DIR__ . '/section/promoWelcom.php');
    $aboutUs = include(__DIR__ . '/section/aboutUs.php');
    $feature = include(__DIR__ . '/section/feature.php');
    $screenshots = include(__DIR__ . '/section/screenshots.php');
    $ourTeam = include(__DIR__ . '/section/outTeam.php');
    $testimonial = include(__DIR__ . '/section/testimonial.php');

    return $start . 
            $promoWelcome . 
            $aboutUs . 
            $feature . 
            $ourTeam .
            $screenshots . 
            $testimonial;
?>