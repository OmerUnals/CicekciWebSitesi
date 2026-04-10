document.addEventListener('DOMContentLoaded', () => {
    // Mobile Menu Toggle
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');

    if (burger) {
        burger.addEventListener('click', () => {
            nav.classList.toggle('nav-active');
            navLinks.forEach((link, index) => {
                if (link.style.animation) {
                    link.style.animation = '';
                } else {
                    link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 + 0.3}s`;
                }
            });
            burger.classList.toggle('toggle');
        });
    }

    // Shopping Cart Logic
    let cart = JSON.parse(localStorage.getItem('flowersCart')) || [];
    const cartCountElement = document.getElementById('cart-count');

    const updateCartCount = () => {
        if (cartCountElement) {
            const totalItems = cart.reduce((total, item) => total + item.quantity, 0);
            cartCountElement.innerText = totalItems;
        }
    };

    const saveCart = () => {
        localStorage.setItem('flowersCart', JSON.stringify(cart));
        updateCartCount();
    };

    // Add to Cart
    const addToCartButtons = document.querySelectorAll('.add-to-cart');
    addToCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            const name = button.getAttribute('data-name');
            const price = parseFloat(button.getAttribute('data-price'));
            const img = button.getAttribute('data-img');

            const existingItem = cart.find(item => item.id === id);

            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                cart.push({ id, name, price, img, quantity: 1 });
            }

            saveCart();
            alert(`${name} sepete eklendi!`);
        });
    });

    // Initial update
    updateCartCount();

    // Render Cart (only on sepet.php)
    const cartContainer = document.getElementById('cart-container');
    const cartTotalPriceElement = document.getElementById('cart-total-price');

    const renderCart = () => {
        if (!cartContainer) return;

        if (cart.length === 0) {
            cartContainer.innerHTML = '<p class="empty-cart-msg">Sepetiniz şu anda boş.</p>';
            if (cartTotalPriceElement) cartTotalPriceElement.innerText = '0';
            return;
        }

        let cartHTML = '<table class="cart-table"><thead><tr><th>Ürün</th><th>Fiyat</th><th>Adet</th><th>Toplam</th><th>İşlem</th></tr></thead><tbody>';
        let total = 0;

        cart.forEach(item => {
            const subtotal = item.price * item.quantity;
            total += subtotal;
            cartHTML += `
                <tr>
                    <td>
                        <div class="cart-product">
                            <img src="${item.img}" alt="${item.name}">
                            <span>${item.name}</span>
                        </div>
                    </td>
                    <td>${item.price} TL</td>
                    <td>
                        <div class="quantity-controls">
                            <button class="btn-qty" onclick="changeQuantity('${item.id}', -1)">-</button>
                            <span>${item.quantity}</span>
                            <button class="btn-qty" onclick="changeQuantity('${item.id}', 1)">+</button>
                        </div>
                    </td>
                    <td>${subtotal} TL</td>
                    <td><button class="btn-remove" onclick="removeFromCart('${item.id}')"><i class="fas fa-trash"></i></button></td>
                </tr>
            `;
        });

        cartHTML += '</tbody></table>';
        cartContainer.innerHTML = cartHTML;
        if (cartTotalPriceElement) cartTotalPriceElement.innerText = total;
    };

    // Global functions for cart management
    window.changeQuantity = (id, delta) => {
        const item = cart.find(item => item.id === id);
        if (item) {
            item.quantity += delta;
            if (item.quantity <= 0) {
                cart = cart.filter(i => i.id !== id);
            }
            saveCart();
            renderCart();
        }
    };

    window.removeFromCart = (id) => {
        cart = cart.filter(item => item.id !== id);
        saveCart();
        renderCart();
    };

    renderCart();
});
