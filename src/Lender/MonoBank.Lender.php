<?php

// Перевірка, чи були надіслані дані з форми
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Отримання даних з форми
    $lenderName = $_POST['lenderName'];
    $criteria = $_POST['criteria'];

    // Перевірка, що ви додаєте кредитора для PrivatBank
    if ($lenderName === 'MonoBank') {
        // Створення екземпляру класу LoanApplicationManager
        $manager = new LoanApplicationManager();

        // Виклик методу addLender() для додавання нового кредитора
        $manager->addLender($MonoBank, $criteria);

        // Виведення повідомлення про успішне додавання кредитора
        echo "Lender $lenderName added successfully";
    } else {
        // Якщо ви намагаєтесь додати кредитора, відмінного від PrivatBank
        echo "Only PrivatBank lenders can be added";
    }
}
?>