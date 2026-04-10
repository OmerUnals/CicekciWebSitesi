<?php include 'includes/header.php'; ?>

    <section id="hero" class="hero">
  <video class="hero-video" autoplay muted loop playsinline poster="video/0.jpg">
    <source src="video/0.mp4" type="video/mp4">
    <!-- Eğer tarayıcı video desteklemiyorsa poster gösterilir -->
  </video>

  <div class="hero-content">
    <h1>En Taze Çiçekler, En Mutlu Anlar</h1>
    <p>Sevdiklerinize en güzel hediyeyi doğanın renkleriyle verin.</p>
    <a href="urunler.php" class="btn">Çiçekleri Keşfet</a>
  </div>
</section>

    <section id="about" class="about section-padding">
        <div class="container">
            <div class="about-grid">
                <div class="about-text">
                    <h2>Biz Kimiz?</h2>
                    <p>Gül Bahçesi olarak, 10 yılı aşkın süredir en taze ve en özel çiçek tasarımlarımızla duygularınıza aracılık ediyoruz. Her bir aranjmanımız, doğanın en güzel renklerini yansıtacak şekilde tutku ve özenle hazırlanmaktadır. Müşteri memnuniyetini her zaman ön planda tutarak, en mutlu anlarınızda yanınızda olmaktan gurur duyuyoruz.</p>
                    <a href="urunler.php" class="btn-outline">Ürünlerimizi Görün</a>
                </div>
                <div class="about-img">
                    <img src="photo/ofis.png" alt="Çiçek dükkanımız">
                </div>
            </div>
            
        </div>

    </section>  
    
   

  
  <div class="container">
    <h2 class="section-title">Öne Çıkan Ürünler</h2>
    <div class="product-grid">

      <div class="product-card">
        <img src="photo/şakayık.jpg" alt="Şakayık">
        <div class="product-info">
          <h3>Şakayık Buketi</h3>
          <p class="price">15.000 TL</p>
          <button class="btn add-to-cart" data-id="21" data-name="Şakayık" data-price="15000" data-img="photo/şakayık.jpg">Sepete Ekle</button>
        </div>
      </div>

      <div class="product-card">
        <img src="photo/yasemin.jpg" alt="Yasemin">
        <div class="product-info">
          <h3>Yasemin Buketi</h3>
          <p class="price">6.300 TL</p>
          <button class="btn add-to-cart" data-id="22" data-name="Yasemin" data-price="6300" data-img="photo/yasemin.jpg">Sepete Ekle</button>
        </div>
      </div>

      <div class="product-card">
        <img src="photo/ortanca.jpg" alt="Ortanca">
        <div class="product-info">
          <h3>Ortanca Buketi</h3>
          <p class="price">5.500 TL</p>
          <button class="btn add-to-cart" data-id="23" data-name="Ortanca" data-price="5500" data-img="photo/ortanca.jpg">Sepete Ekle</button>
        </div>
      </div>
    </div>
</div>

<div class="container">
    <h2 class="section-title">Organizayon Ürünleri</h2>
    <div class="product-grid">

      <div class="product-card">
        <img src="photo/çiçekkemeri.jpg" alt="Çiçek Kemeri">
        <div class="product-info">
          <h3>Çiçek Kemeri</h3>
          <p class="price">50.000 TL</p>
          <button class="btn add-to-cart" data-id="24" data-name="Çiçek Kemeri" data-price="50000" data-img="photo/çiçekkemeri.jpg">Sepete Ekle</button>
        </div>
      </div>

      <div class="product-card">
        <img src="photo/gulduvari.jpg" alt="Gül Duvarı">
        <div class="product-info">
          <h3>Gül Duvarı</h3>
          <p class="price">40.000 TL</p>
          <button class="btn add-to-cart" data-id="25" data-name="Gül Duvarı" data-price="40000" data-img="photo/gulduvari.jpg">Sepete Ekle</button>
        </div>
      </div>

      <div class="product-card">
        <img src="photo/çeleng.jpg" alt="Çelenk">
        <div class="product-info">
          <h3>Çelenk</h3>
          <p class="price">30.000 TL</p>
          <button class="btn add-to-cart" data-id="26" data-name="Çelenk" data-price="30000" data-img="photo/çeleng.jpg">Sepete Ekle</button>
        </div>
      </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
