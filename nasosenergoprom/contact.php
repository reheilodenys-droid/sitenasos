<?php
$messageSent = false;
$name = '';
$email = '';
$message = '';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name    = htmlspecialchars($_POST['name'] ?? '');
    $email   = htmlspecialchars($_POST['email'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    // Тут можна додати відправку на email або запис у базу даних.
    // Для навчального варіанту просто виводимо повідомлення про успіх.
    if ($name !== '' && $email !== '' && $message !== '') {
        $messageSent = true;
    }
}

include 'header.php';
?>

<h1>Контакти</h1>

<div class="contacts-block">
    <p><strong>ТОВ "ПВП НАСОСЕНЕРГОПРОМ"</strong></p>
    <p>Адреса: м. _______, вул. _______, буд. __</p>
    <p>Телефон: +38 (0__) ___-__-__</p>
    <p>E-mail: info@nasosenergoprom.com (приклад)</p>
    <p>Графік роботи: Пн–Пт, 8:00 – 17:00</p>
</div>

<h2>Форма зворотного зв’язку</h2>

<?php if ($messageSent): ?>
    <div class="alert success">
        Дякуємо, <?php echo $name; ?>! Ваше повідомлення відправлено (навчальний приклад).
    </div>
<?php endif; ?>

<form method="post" action="contact.php" class="contact-form">
    <label for="name">Ваше ім’я:</label>
    <input type="text" id="name" name="name" required value="<?php echo $name; ?>">

    <label for="email">Електронна пошта:</label>
    <input type="email" id="email" name="email" required value="<?php echo $email; ?>">

    <label for="message">Повідомлення:</label>
    <textarea id="message" name="message" rows="5" required><?php echo $message; ?></textarea>

    <button type="submit" class="btn">Надіслати</button>
</form>

<?php include 'footer.php'; ?>
