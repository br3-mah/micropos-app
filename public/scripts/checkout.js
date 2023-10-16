const checkoutButton = document.getElementById('check-out');

checkoutButton.addEventListener('click', async () => {
    // Retrieve cart data from session storage
    const storedCart = sessionStorage.getItem('cart');
    if (storedCart) {
        const cart = JSON.parse(storedCart);

        // Prepare the data to send to the Laravel API
        const dataToSend = {
            cart: cart,
        };

        try {
            // Send a POST request to your Laravel API endpoint
            const response = await fetch('/api/checkout', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(dataToSend),
            });

            if (response.ok) {
                // Cart data was successfully submitted
                console.log('Cart submitted successfully.');
                // Optionally, you can clear the cart and session storage here
                clearCartItems();
            } else {
                console.error('Failed to submit cart data.');
            }
        } catch (error) {
            console.error('Error while submitting cart data:', error);
        }
    }
});

function displayCartItems() {
    let cart = JSON.parse(sessionStorage.getItem('cart')) || {};
    const cartTableBody = document.querySelector(".shop_table_in tbody");
    let total = 0;

    // Clear previous cart items
    const existingCartItems = document.querySelectorAll(".cart_item");
    existingCartItems.forEach(item => item.remove());

    // Display the cart items
    for (const productId in cart) {
        if (cart.hasOwnProperty(productId)) {
            const product = cart[productId];
            const cartRow = document.createElement('tr');
            cartRow.classList.add('cart_item');

            // Product name and quantity
            const productNameCell = document.createElement('td');
            productNameCell.classList.add('product-name');
            productNameCell.innerHTML = `${product.name} <strong class="product-quantity">×&nbsp;${product.qty}</strong>`;
            
            // Product total
            // alert(product.subtotal);
            const productTotalCell = document.createElement('td');
            productTotalCell.classList.add('product-total');

            if (product.subtotal !== null) {
                productTotalCell.innerHTML = `
                    <span class="woocommerce-Price-amount amount">
                        <bdi><span class="woocommerce-Price-currencySymbol">K</span>${product.subtotal.toFixed(2)}</bdi>
                    </span>
                `;
            }

            cartRow.appendChild(productNameCell);
            cartRow.appendChild(productTotalCell);
            cartTableBody.insertBefore(cartRow, cartTableBody.querySelector(".cart-subtotal"));

            total += product.subtotal;
        }
    }

    // Update the subtotal and total rows in the table
    const subtotalElem = cartTableBody.querySelector(".cart-subtotal td:last-child .woocommerce-Price-amount.amount bdi");
    const totalElem = cartTableBody.querySelector(".order-total td:last-child .woocommerce-Price-amount.amount bdi");
    
    subtotalElem.innerHTML = `<span class="woocommerce-Price-currencySymbol">K</span>${total.toFixed(2)}`;
    totalElem.innerHTML = `<span class="woocommerce-Price-currencySymbol">K</span>${total.toFixed(2)}`; // Update this if you have other charges
}

// Call the function to display the cart items
displayCartItems();

// Wizard
$('#customer_details').show();
$('#order_review').hide();
var customer_details = document.querySelector(".bar_payment");
var order_review = document.querySelector(".bar_order");


$('.next-stage').on('click', async () => {
    $('#customer_details').hide();
    $('#order_review').show();
    // Add the "active" class to its classList
    order_review.classList.add("active");
});
$('.prev-stage').on('click', async () => {
    $('#customer_details').show();
    $('#order_review').hide();
    // Add the "active" class to its classList
    order_review.classList.remove("active");
});


// Add an event listener to a button or trigger that will submit the form
document.getElementById('place_order').addEventListener('click', function (e) {
    e.preventDefault(); // Prevent the default form submission
    // Retrieve cartData from session storage
    var cartData = sessionStorage.getItem('cart');

    // Get a reference to the form
    var form = document.getElementById('checkout-form');

    // Create a FormData object from the form
    var formData = new FormData(form);

    // Append the cartData to the FormData object
    formData.append('cartData', cartData);

    // Create an XMLHttpRequest or use the fetch API to send the form data
    var xhr = new XMLHttpRequest();
    xhr.open('POST', form.action, true);

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Handle the response from the server if needed
            // console.log(xhr.response);
            var response = JSON.parse(xhr.responseText);

            // Now you can work with the parsed JSON array
            var id = response.data.id;
          
            // Redirect to the Laravel route
            window.location.href = 'order/'+id;
        }
    };

    xhr.send(formData);
});