<?php 
    include 'includes/header.php'; 
    // Тут будемо відображати повідомлення про успішне надсилання форми
    $message = isset($_GET['status']) && $_GET['status'] == 'success' ? 
               '<p class="success-message">Ваше повідомлення успішно надіслано!</p>' : 
               '';
?>

<section id="hero" class="hero">
    <div class="hero-content">
        <h1>**НАДІЙНЕ НАСОСНЕ ОБЛАДНАННЯ**</h1>
        <p>Комплексні рішення для промисловості, енергетики та комунального господарства.</p>
        <a href="#contact" class="btn">Замовити консультацію</a>
    </div>
</section>

<section id="about" class="section about-us">
    <div class="container">
        <h2>**Про компанію**</h2>
        <p>ТОВ ПВПНАСОСЕНЕРГОПРОМ – це понад **15 років** досвіду у сфері постачання, монтажу та обслуговування насосних систем. Ми гарантуємо якість, надійність та енергоефективність.</p>
        <p>Наша місія — забезпечити безперебійну роботу вашого обладнання.</p>
    </div>
</section>

<section id="services" class="section services">
    <div class="container">
        <h2>**Наші послуги**</h2>
        <div class="service-list">
            <div class="service-item">
                <h3>Постачання обладнання</h3>
                <p>Широкий асортимент промислових насосів від провідних світових виробників.</p>
            </div>
            <div class="service-item">
                <h3>Монтаж та пусконалагодження</h3>
                <p>Професійний монтаж та запуск систем "під ключ".</p>
            </div>
            <div class="service-item">
                <h3>Сервісне обслуговування</h3>
                <p>Гарантійне та післягарантійне обслуговування, ремонт будь-якої складності.</p>
            </div>
        </div>
    </div>
</section>

<section id="products" class="section products">
    <div class="container">
        <h2>**Основні категорії продукції**</h2>
        <div class="product-grid">
            <div class="product-item">
                <h3>Центробіжні насоси</h3>
            </div>
            <div class="product-item">
                <h3>Насоси для свердловин</h3>
            </div>
            <div class="product-item">
                <h3>Дозуючі насоси</h3>
            </div>
        </div>
        </div>
</section>

<section id="contact" class="section contact">
    <div class="container">
        <h2>**Зв'яжіться з нами**</h2>
        <?php echo $message; // Вивід повідомлення про успіх ?>
        <form action="process_form.php" method="POST" class="contact-form">
            <input type="text" name="name" placeholder="Ваше ім'я" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="tel" name="phone" placeholder="Телефон">
            <textarea name="message" rows="5" placeholder="Ваше повідомлення або запит" required></textarea>
            <button type="submit" class="btn submit-btn">Надіслати запит</button>
        </form>
    </div>
</section>

<?php include 'includes/footer.php'; ?>