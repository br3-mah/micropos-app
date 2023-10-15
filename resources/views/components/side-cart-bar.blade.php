<style>
.cart-sidebar {
    position: fixed;
    top: 0;
    right: -300px; /* Hidden by default */
    width: 300px;
    height: 100%;
    background-color: #fff;
    box-shadow: -2px 0 5px rgba(0, 0, 0, 0.2);
    transition: right 0.3s ease-in-out;
    z-index: 9999;
    overflow-y: auto;
}
.cart-sidebar button{
    border-radius: 100%;
    background-color: #ffffff;
    color: #fff;
}

.cart-sidebar.show {
    right: 0;
}

.cart-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
    background-color: #ffffff;
    color: #fff;
}

.cart-header h5 {
    margin: 0;
    color: #81351e
}

.cart-items {
    list-style: none;
    padding: 0;
}

.cart-items li {
    padding: 10px 20px;
    border-bottom: 1px solid #ccc;
}

.cart-items li:last-child {
    border-bottom: none;
}

.clear-cart {
    display: block;
    width: 100%;
    padding: 10px 20px;
    background-color: #ffffff;
    color: #afb5b5;
    border: none;
    cursor: pointer;
    text-align: left;
    font-size: 12px;
}
.check-out {
    display: block;
    width: 100%;
    padding: 10px 20px;
    background-color: #ffffff;
    color: #cf3c13;
    border: none;
    cursor: pointer;
}
.total-section{
    text-align: right;
    padding: 5%;
    border-top: 1px solid #b5afaf;
}
</style>
<div id="cart-sidebar" class="cart-sidebar">
    <div class="cart-header">
        <h5 >My Cart</h5>
        <button style="background-color: #cf3c13;" id="close-cart" class="close-cart">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
              </svg>
        </button>
    </div>
    <ul id="cart-items" class="cart-items" style="font-weight: bold; font-size:14px">
        <!-- Cart items will be dynamically added here -->
    </ul>
    <button id="clear-cart" class="clear-cart">Clear Cart</button>
    
    <div class="total-section">
        <h5>Total</h5>
        <p><span id="cart-total">0.00</span></p>
    </div>
    <a href="{{ route('checkout.index') }}" style="text-align:right; margin:auto;" id="check-out" class="check-out">Checkout</a>
</div>
