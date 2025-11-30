<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // 1. Отримання та очищення даних
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST["phone"]);
    $message = trim($_POST["message"]);

    // 2. Валідація (перевірка на порожні поля)
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Повернення з помилкою
        header("Location: index.php?status=error#contact");
        exit;
    }

    // 3. Підготовка до надсилання email (імітація)
    $recipient = "info@pvnep.com.ua"; // Замініть на реальний email компанії
    $subject = "Запит з сайту-візитки від $name";
    
    $email_content = "Ім'я: $name\n";
    $email_content .= "Email: $email\n";
    $email_content .= "Телефон: $phone\n\n";
    $email_content .= "Повідомлення:\n$message\n";

    // 4. Надсилання пошти (реальна функція PHP - вимагає налаштування сервера)
    // $email_headers = "From: $name <$email>";
    // if (mail($recipient, $subject, $email_content, $email_headers)) {
    //     // Успішне надсилання
    //     header("Location: index.php?status=success#contact");
    // } else {
    //     // Помилка надсилання
    //     header("Location: index.php?status=mail_error#contact");
    // }
    
    // Тимчасовий код для практики (завжди успіх)
    // Запишіть дані у лог-файл для перевірки
    $log_data = "[" . date("Y-m-d H:i:s") . "] Успішний запит: $email_content\n---\n";
    file_put_contents('requests.log', $log_data, FILE_APPEND);


    // Перенаправлення користувача на головну сторінку з повідомленням про успіх
    header("Location: index.php?status=success#contact");

} else {
    // Якщо до файлу звернулись напряму, а не через POST
    http_response_code(403);
    echo "Спроба прямого доступу до обробника форми.";
}

exit;
?>