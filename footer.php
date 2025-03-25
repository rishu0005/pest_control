<div class="top-padding bg-navyblue">
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <div class="about-footer w-75 text-white">
                <h4 class="fw-7">About </h4>
                <p class="">we are dedicated to creating safe, pest-free environments for homes and businesses alike. With years of experience in the pest control industry.
                   <br><br>
                    we pride ourselves on delivering effective, eco-friendly solutions tailored to your needs.</p>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 text-white">

            <h4>Services</h4>
            <ul>
                <li>About Services</li>
                <li>Our Services</li>
                <li>Our Blogs</li>
                <li>Contact Us</li>
            </ul>
        </div>
        <div class="col-lg-2 col-md-4 text-white">
            <h4>Links</h4>
            <ul>
                <li>Home Pest Control</li>
                <li>Commerical Pest</li>
                <li>Termite & Rodent</li>
                <li>Eco-Friendly Pest</li>
                <li>Wildlife Removal </li>
            </ul>
        </div>
        <div class="col-lg-3 col-md-5 text-white">
            <h4>Contact Us </h4>
            <p></p>
        </div>
        <div class="col-lg-12 mt-5 border-secondary border-top"></div>
    </div>
</div>
</div>

<!-- Bootstrap CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Swiper Js Script Cdn -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>

//Swiper slider

// Initialize swiper
var swiper = new Swiper(".mySwiper", {
    slidesPerView : 1,
			speed: 1000,
			spaceBetween: 30,
			loop: true,
			autoplay: {
				delay: 5000,
			},
			pagination: {
				el: '.swiper-pagination',
				clickable: true,
			},
			breakpoints: {
				768:{
					slidesPerView: 2,
				},
				991:{
					slidesPerView: 3,
				}
			}
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