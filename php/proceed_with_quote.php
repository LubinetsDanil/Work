<?php

// Підключення файлу з класами
require_once 'vendor/autoload.php';

// Перевірка, чи були надіслані дані з форми
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Отримання ідентифікатора заявки та ідентифікатора обраної пропозиції з форми
    $applicationId = $_POST['applicationId'];
    $quoteId = $_POST['quoteId'];

    // Створення екземпляру класу LoanApplicationManager
    $manager = new LoanApplicationManager();

    // Виклик методу proceedWithQuote() для обробки обраної пропозиції
    $result = $manager->proceedWithQuote($applicationId, $quoteId);

    // Перевірка результату операції та виведення повідомлення на сторінці
    if ($result) {
        echo "Quote accepted successfully!";
    } else {
        echo "Failed to accept the quote.";
    }
}
?>
