<div class=" bg-navyblue footer-padding">
<div class="container">
    <div class="row">
        <div class="col-lg-5">
            <div class="about-footer w-75 text-white">
                <h4 class="fw-7">Address </h4>
                <p class="">Kandivali address:- shop no.17, singe chawl, vadar pada naka, Akurli Road, Kandivali East, Mumbai 400101. <br><br>
                    
                    Virar Address:- 209 Vaibhav apartment, Bldg no.18, Narayan Nagar, Gandhi chowk, phool pada road, Virar East, District Palghar pincode 401305 <br> <br></p>
            </div>
        </div>
        <div class="col-lg-2 col-md-3 footer-links text-white">

            <h4 class="ms-3">Services</h4>
            <ul class="">
                <li class="mb-3 "><a href="service.php#rat_guard" class="text-white">Rat Guard Installation</a></li>
                <li class="mb-3"><a href="service.php#rodent_control" class="text-white">Rodent Control</a></li>
                <li class="mb-3"><a href="service.php#termite_control" class="text-white">Termite Control</a></li>
                <li class="mb-3"><a href="service.php#bed_bug_solution" class="text-white">Bed Bugs Control</a></li>
                <li class="mb-3"><a href="service.php#cockroaches_sloution" class="text-white">Cockroaches Control</a></li>
            </ul>
        </div>
        <div class="col-lg-2 footer-links col-md-4 text-white">
            <h4 class="ms-3">Links</h4>
            <ul class="">
                <li class="mb-3"><a class="text-white links text-decoration-nne" href="about.php">About Us</a></li>     
                <li class="mb-3"><a class="text-white text-decoration-nne" href="service.php" >Services</a></li>
                <li class="mb-3"><a class="text-white text-decoration-nne" href="contact.php">Contact</a></li>
                <li class="mb-3"><a class="text-white text-decoration-nne" href="index.php">Home</a></li>
                <!-- <li class="mb-3">Eco-Friendly Pest</li> -->
                <!-- <li class="mb-3">Wildlife Removal </li> -->
            </ul>
        </div>
        <div class="col-lg-3 col-md-5 text-white">
            <h4 class="mb-3">Contact Us </h4>
            <p class="mt-3"> <i class="fa-solid fa-envelope mail me-2"></i><a href="mailto:sagarpestcontrol2002@gmail.com" class="text-white text-decoration-none">sagarpestcontrol2002@gmail.com</a> </p>
            <p class="mt-3"> <i class="fa-solid fa-phone mail me-2"></i><a href="tel:+919820614206" class="text-white text-decoration-none">+91 98206 14206</a> </p>
            <p class="mt-3 ms-5"><a href="tel:+919820131924" class="text-white text-decoration-none">+91 98201 31924</a></p>
            <p class="mt-3 ms-5"><a href="tel:+919820259539" class="text-white text-decoration-none">+91 98202 59539</a></p>
            <p class="mt-3 ms-5"><a href="tel:+919920442079" class="text-white text-decoration-none">+91 99204 42079</a></p>
        </div>

        <div class="row mt-5 border-secondary border-top d-flex justify-content-between flex-wrap align-items-center">
           
        <div class="col-lg-4 col-md-6 ">
                <div class="footer-logo d-flex align-items-center mt-3 mb-3">
                        <img src="./img/logo.png" class="img-fluid rounded d-flex mx-auto" alt="">
                        <!-- <h3 class="text-light fw-7">Sagar Pest Control</h3> -->
                    </div>
                </div>

        <div class="col-lg-4 col-md-6">
            <div class="footer-social">
                        <ul class="list-unstyled d-flex justify-content-center gap-3 align-items-center">
                            <li><a href="#"><i class="fa-brands fa-instagram icon"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-facebook-f icon"></i></a></li>
                            <li><a href="#"><i class="fa-brands fa-dribbble icon"></i></a></li>
                        </ul>
                </div>
        </div>

        <div class="col-lg-4 col-md-12">
  <div class="footer-content">
                <p class="text-white  text-center">Copyright © 2025 All Rights Reserved.</p>
                <p class="text-white  text-center">Developed by <a href=""  target="_blank" class="text-white text-decoration-none fw-bold">Deltasoft</a> .</p>

            </div>
        </div>
        
          

            
          
           
        </div>
    </div>
</div>
</div>

<!-- Bootstrap CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<!-- Swiper JS -->
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
        }else if (elementId === 'clients') {
            counterElement.textContent = Math.floor(current) + '+'; } 
            
            else if (elementId === 'projects') {
            counterElement.textContent = Math.floor(current) + '+'; } 

            else if (elementId === 'cases') {
                counterElement.textContent = Math.floor(current) + '+'; } 
    
            else {
            // For other counters, just display the number
            counterElement.textContent = Math.floor(current);
        }
    }
       


            const interval = setInterval(updateCounter, 50);
        }

// Initialize counters with start, end, and duration (in ms)
countUp('clients', 0, 350, 2000);    // 2 seconds for clients
countUp('projects', 0, 1000, 3000);   // 3 seconds for projects
countUp('cases', 0, 220, 2500);      // 2.5 seconds for cases
countUp('profit', 0,99,2500)         //2.5 seconds for profit

</script>

</body>
</html>