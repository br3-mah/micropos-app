document.addEventListener("DOMContentLoaded", function() {
    // Get all images
    var images = document.getElementsByTagName('img');
    
    for (var i = 0; i < images.length; i++) {
        images[i].onerror = function() {
            // Replace with default image
            this.src = 'path_to_default_image.jpg';
            
            // Remove the error event listener to prevent loop in case the default image is also missing
            this.onerror = null; 
        }
    }
});


