// Selectors
const cartSidebar = document.getElementById('cart-sidebar');
const closeCart = document.getElementById('close-cart');
const clearCart = document.getElementById('clear-cart');
const cartItems = document.getElementById('cart-items');
const cartTotal = document.getElementById('cart-total');

// Initialize cart from session storage (if it exists)
let cart = JSON.parse(sessionStorage.getItem('cart')) || {};

function setCount(){
    if (cart && Object.keys(cart).length > 0) {
        let totalItems = Object.keys(cart).length;
        // let totalItems = Object.values(cart).reduce((total, quantity) => total + quantity, 0);
      
        // Select the HTML element with the ID "cart-info" and set its innerHTML
        const cartInfoElement = document.getElementById('sc_layouts_cart_items_short');
        const cartInfoElement2 = document.getElementById('sc_layouts_cart_items_short2');
        cartInfoElement.innerHTML = `${totalItems}`;
        cartInfoElement2.innerHTML = `${totalItems}`;
    
      }
}

function showCart(){
    cartSidebar.classList.add('show');
}


// Function to update the cart sidebar
function updateCartSidebar() {
    cartItems.innerHTML = '';
    let total = 0;

    for (const productId in cart) {
        if (cart.hasOwnProperty(productId)) {
            const product = cart[productId];
            const item = document.createElement('li');

            // Create buttons for increasing, decreasing, and removing items
            const increaseButton = document.createElement('button');
            increaseButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" style="color:#02b122" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/></svg>';
            increaseButton.addEventListener('click', () => {
                cart[productId].qty++;
                cart[productId].subtotal += cart[productId].price;
                updateCartSidebar();
                storeCart();
            });

            const decreaseButton = document.createElement('button');
            decreaseButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" style="color:#c42a00" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/></svg>';
            decreaseButton.addEventListener('click', () => {
                if (cart[productId].qty > 1) {
                    cart[productId].qty--;
                    cart[productId].subtotal -= cart[productId].price;
                } else {
                    delete cart[productId];
                }
                updateCartSidebar();
                storeCart();
            });

            const removeButton = document.createElement('button');
            removeButton.innerHTML = '<svg xmlns="http://www.w3.org/2000/svg" style="color:#e30f00"  width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/><path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/></svg>';
            removeButton.addEventListener('click', () => {
                delete cart[productId];
                updateCartSidebar();
                storeCart();
            });
            // ${product.name} - K${product.subtotal.toFixed(2)} (Qty: ${product.qty})
            item.innerHTML = `
                
                ${product.name}  <button style="border-radius:100%; background-color:#1f514a">x${product.qty}</button>
            `;
            item.appendChild(increaseButton);
            item.appendChild(decreaseButton);
            item.appendChild(removeButton);

            cartItems.appendChild(item);
            total += product.subtotal;
        }
    }
    setCount();
    cartTotal.textContent = `K${total.toFixed(2)}`;
}

// Function to store the cart in session storage
function storeCart() {
    sessionStorage.setItem('cart', JSON.stringify(cart));
}

// Function to add an item to the cart
function addToCart(product) {
    if (!cart[product.id]) {
        cart[product.id] = {
            product_id: product.id,
            name: product.name,
            price: product.price,
            qty: 1,
            subtotal: product.price,
        };
    } else {
        cart[product.id].qty++;
        cart[product.id].subtotal += product.price;
    }

    // Update the cart sidebar
    updateCartSidebar();

    // Show the cart sidebar
    cartSidebar.classList.add('show');

    // alert(isAuthenticated);
    if (isAuthenticated) {
        sessionStorage.setItem('cart', JSON.stringify(cart));
        // User is authenticated, make an API request to addToCart
        // $.ajax({
        //     url: 'api/add-cart', // Replace with the actual API endpoint
        //     type: 'POST',
        //     dataType: 'json',
        //     data: {
        //         product_id: product.id,
        //         cart_qty: cart[product.id].qty,
        //         email: current_user.email,
        //         // Include additional data as needed
        //     },
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), // Include CSRF token header
        //         // 'Authorization': 'Bearer ' + yourAuthToken, // Include your authentication token here
        //     },
        //     success: function(response) {
        //         // Handle the success response from the server
        //         console.log('Item added to cart:', response);
        //     },
        //     error: function(error) {
        //         // Handle any errors that occur during the request
        //         console.error('Error adding item to cart:', error);
        //     }
        // });
    } else {
        // User is not authenticated, store the cart in session storage
        sessionStorage.setItem('cart', JSON.stringify(cart));
    }
    setCount();
}

// Function to remove an item from the cart
function removeFromCart(productId) {
    if (cart[productId]) {
        if (cart[productId].qty === 1) {
            delete cart[productId];
        } else {
            cart[productId].qty--;
            cart[productId].subtotal -= cart[productId].price;
        }

        // Update the cart sidebar
        updateCartSidebar();

        // Store the cart in session storage
        sessionStorage.setItem('cart', JSON.stringify(cart));
    }
    setCount();
}

// Function to clear the cart
function clearCartItems() {
    cartItems.innerHTML = '';
    cartTotal.textContent = 'Total: K0.00';
    cartSidebar.classList.remove('show');
    cart = {};

    // Clear session storage
    sessionStorage.removeItem('cart');
    setCount();
}

// Close cart sidebar
closeCart.addEventListener('click', function () {
    cartSidebar.classList.remove('show');
});

// Add to cart button click event
const addToCartButtons = document.querySelectorAll('.add_to_cart_button');
addToCartButtons.forEach((button) => {
    button.addEventListener('click', function () {
        const product = {
            id: button.getAttribute('data-product_id'),
            name: button.getAttribute('data-product-name'),
            price: parseFloat(button.getAttribute('data-product-price')),
        };
        addToCart(product);
    });
});

// Remove from cart button click event (you can customize this selector)
document.body.addEventListener('click', function (event) {
    if (event.target.classList.contains('remove-from-cart')) {
        const productId = event.target.getAttribute('data-product-id');
        removeFromCart(productId);
    }
});

// Clear cart button click event
clearCart.addEventListener('click', function () {
    clearCartItems();
});

// Initialize cart on page load
updateCartSidebar();
setCount();
