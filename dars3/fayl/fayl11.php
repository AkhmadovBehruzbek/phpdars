<?php
    // direktoriya yaratish uchun mkdir() funksiyasidan foydalanamiz
    // Katalog manzili
    $dir = "testdir";
    // katalogni mavjudligini tekshiramiz
    if (!file_exists($dir)) {
        // katalog yaratib koramiz
        if (mkdir($dir)) {
            echo "Yaratildi";
        } else {
            echo "yaratib bo'lmadi";
        }
    } else {
        echo "Katalog allaqachon mavjud";
    }
?>