document.addEventListener('DOMContentLoaded', function() {
    // Define a cart array to store selected items
    var cart = [];

    // Function to add item to cart
    function addItemToCart(productName, price) {
        cart.push({ name: productName, price: price });
    }

    // Function to calculate total
    function calculateTotal() {
        var total = 0;
        for (var i = 0; i < cart.length; i++) {
            total += cart[i].price;
        }
        return total;
    }

    // Function to display cart content
    function displayCart() {
        var cartContent = document.getElementById('cart-content');
        cartContent.innerHTML = '';

        for (var i = 0; i < cart.length; i++) {
            var item = cart[i];
            var itemElement = document.createElement('div');
            itemElement.innerHTML = item.name + ' - K' + item.price;
            cartContent.appendChild(itemElement);
        }
    }

    // Function to handle pay button click
    function handlePayButtonClick() {
        var total = calculateTotal();
        var confirmation = confirm('Total: K' + total + '\n\nProceed to payment?');

        if (confirmation) {
            alert('Your order was placed successfully!');
            // Clear the cart after successful payment
            cart = [];
            displayCart();
        }
    }

    // Add click event listener to cart icons
    var cartIcons = document.getElementsByClassName('add-cart');
    for (var i = 0; i < cartIcons.length; i++) {
        cartIcons[i].addEventListener('click', function() {
            var productName = this.parentElement.querySelector('.product-title').innerText;
            var price = parseInt(this.parentElement.querySelector('.price').innerText.slice(1));
            addItemToCart(productName, price);
            displayCart();
        });
    }

    // Add click event listener to pay button
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', handlePayButtonClick);
});
