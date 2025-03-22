<!-- Bootstrap CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Swiper Js Script Cdn -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>

//Swiper slider
var swiper = new Swiper('.swiper', {
  slidesPerView: 1, // Number of slides visible at once
  spaceBetween: 30, // Space between slides
  loop: true, // Loop the slides
  navigation: {
    nextEl: '.swiper-button-next', // Next button
    prevEl: '.swiper-button-prev', // Previous button
  },
  pagination: {
    el: '.swiper-pagination', // Pagination container
    clickable: true, // Make bullets clickable
  },
});



//function For Countup animation
function countUp(elementId, start, end, duration) {
            let current = start;
            const increment = (end - start) / (duration / 50); // Update every 50ms
            const counterElement = document.getElementById(elementId);
            
            function updateCounter() {
                current += increment;
                if (current >= end) {
                    current = end;
                    clearInterval(interval);
                }
                counterElement.textContent = Math.floor(current);
            }
            function updateCounter() {
        current += increment;
        if (current >= end) {
            current = end;
            clearInterval(interval);
        }
        
        if (elementId === 'profit') {
            // For 'profit', append '%' sign
            counterElement.textContent = Math.floor(current) + '%';
        } else {
            // For other counters, just display the number
            counterElement.textContent = Math.floor(current);
        }
    }


            const interval = setInterval(updateCounter, 50);
        }

// Initialize counters with start, end, and duration (in ms)
countUp('clients', 0, 200, 2000);    // 2 seconds for clients
countUp('projects', 0, 150, 3000);   // 3 seconds for projects
countUp('cases', 0, 120, 2500);      // 2.5 seconds for cases
countUp('profit', 0,79,2500)         //2.5 seconds for profit

</script>

</body>
</html>