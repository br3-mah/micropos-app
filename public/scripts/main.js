window.onload = function() {
    var images = document.querySelectorAll('.attachment-woocommerce_thumbnail');

    images.forEach(function(img) {
        img.onerror = function() {
            this.onerror = null; // to ensure it doesn't keep triggering if the default image is also broken
            this.src = 'https://www.rallis.com/Upload/Images/thumbnail/Product-inside.png';
        }
    });
}
