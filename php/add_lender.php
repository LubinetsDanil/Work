<?php

// Підключення файлу з класами
require_once 'vendor/autoload.php';

// Перевірка, чи були надіслані дані з форми
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Отримання даних з форми
    $lenderName = $_POST['lenderName'];
    $criteria = $_POST['criteria'];

    // Створення екземпляру класу LoanApplicationManager
    $manager = new LoanApplicationManager();

    // Виклик методу addLender() для додавання нового кредитора
    $manager->addLender($lenderName, $criteria);

    // Виведення повідомлення про успішне додавання кредитора
    echo "Lender $lenderName added successfully";
}
?>