<?php

// Перевірка, чи були надіслані дані з форми
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Отримання даних з форми
    $name = $_POST['name'];
    $amount = $_POST['amount'];

    // Створення екземпляру класу LoanApplicationManager
    $manager = new LoanApplicationManager();

    // Виклик методу startNewApplication() для створення нової заявки
    $applicationId = $manager->startNewApplication(['name' => $name, 'amount' => $amount]);

    // Виведення ідентифікатора заявки
    echo "Application created with ID: $applicationId";
}
?>
