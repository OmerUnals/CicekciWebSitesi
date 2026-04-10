<?php include 'includes/header.php'; ?>

    <section id="cart" class="cart section-padding">
        <div class="container">
            <h2 class="section-title">Alışveriş Sepeti</h2>
            <div id="cart-container" class="cart-container">
                <!-- Cart items will be loaded here by JavaScript -->
            </div>
            <div id="cart-summary" class="cart-summary">
                <h3>Toplam: <span id="cart-total-price">0</span> TL</h3>
                <button class="btn" onclick="alert('Ödeme sayfasına yönlendiriliyorsunuz...')">Siparişi Tamamla</button>
            </div>
        </div>
    </section>

<?php include 'includes/footer.php'; ?>
