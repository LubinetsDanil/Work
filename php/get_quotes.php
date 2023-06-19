<?php

// Підключення файлу з класами
require_once 'vendor/autoload.php';

// Перевірка, чи були надіслані дані з форми
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Отримання ідентифікатора заявки з форми
    $applicationId = $_POST['applicationId'];

    // Створення екземпляру класу LoanApplicationManager
    $manager = new LoanApplicationManager();

    // Виклик методу getQuotes() для отримання пропозицій від кредиторів
    $quotes = $manager->getQuotes($applicationId);

    // Виведення отриманих пропозицій на сторінці
    echo "<h3>Loan Quotes:</h3>";
    foreach ($quotes as $quote) {
        echo "<p>Quote ID: " . $quote['id'] . "</p>";
        echo "<p>Interest Rate: " . $quote['interestRate'] . "%</p>";
        echo "<p>Loan Term: " . $quote['loanTerm'] . " months</p>";
        echo "<hr>";
    }
}
?>