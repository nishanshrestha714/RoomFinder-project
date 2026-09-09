<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
        integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../css/stylee.css">
    <link rel="stylesheet" href="../css/services.css">
   

</head>

<body>


    <header>
        <h2 class="logo"></h2>
        
        <nav class="navigation">
            
        <a href="index.php" class="one">Home</a>
            <a href="about-us.php" class="one">About</a>
            <a href="seervices.php" class="one">Services</a>
            <a href="contact.php" class="one">Contact</a>
            <a href="login.php" class="one">Login</a>
        </nav>
        <div class="menu-toggle" ><i class="fa-solid fa-bars "></i></div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.querySelector(".menu-toggle");  
    const menu = document.querySelector(".navigation");
    const too=document.querySelector(".navigation a.one:hover::after");       

   
    menuToggle.addEventListener("click", () => {
        menu.classList.toggle("active");  
        too.style.transform="scaleX(0)";
    });
});

        </script>
    </header>
    <main>

        <section class="services">
            <div class="heading">
                <h1>My Services </h1>
            </div>
            <div class="Services_container">
                <div class="box">
                    <div class="contains">
                        <h3>Room Listing</h3>
                        <p>We have a big list of rooms available in different locations. Each room has details like
                            size, amenities, rent, and photos. We keep all the information updated and verified so you
                            can find the right room for you. Whether you want something cheap or luxurious, we've got
                            you covered.</p>
                        </p>
                    </div>
                    <div class="submits">
                        <a href="" class="btn">read more</a>
                    </div>
                </div>

                <div class="box">
                    <div class="contains">
                        <h3>Room Booking</h3>
                        <p>You can book your chosen room online with ease. Our booking system is user-friendly and
                            secure, making the process smooth and hassle-free. You can check available dates, read
                            reviews, and make reservations quickly and easily.</p>
                    </div>
                    <div class="submits">
                        <a href="read-one.html" class="btn">read more</a>
                    </div>
                </div>

                <div class="box">
                    <div class="contains">
                        <h3>Room Management</h3>
                        <p>This service is for property owners and managers. It helps you manage your room listings,
                            track bookings, and communicate with tenants. You can update room details, set availability,
                            and view booking history all in one place.</p>
                    </div>
                    <div class="submits">
                        <a href="" class="btn">read more</a>
                    </div>
                </div>

                <div class="box">
                    <div class="contains">
                        <h3>Room Search</h3>
                        <p>Our advanced search tool helps you find rooms that meet your criteria. You can filter results
                            by location, price, amenities, and more. Our search engine is optimized to show the most
                            relevant results, saving you time and effort.</p>
                    </div>
                    <div class="submits">
                        <a href="" class="btn">read more</a>
                    </div>
                </div>


                <div class="box">
                    <div class="contains">

                        <h3>Tenant Support</h3>
                        <p>We provide support for tenants with any questions or issues they might have. Our support team
                            is ready to help with the booking process, resolve problems, and offer advice on finding the
                            right room. We also provide tips on moving and settling in.</p>
                    </div>
                    <div class="submits">
                        <a href="" class="btn">read more</a>
                    </div>
                </div>


                <div class="box">
                    <div class="contains">

                        <h3>Room Reviews</h3>
                        <p>Tenants can share their experiences and feedback about the rooms they've stayed in. This
                            helps others make informed decisions based on real experiences. You can read detailed
                            reviews, ratings, and testimonials from other tenants.</p>
                    </div>
                    <div class="submits">
                        <a href="" class="btn">read more</a>
                    </div>
                </div>
            </div>










            
        </section>
    </main>






    <footer>
        <section >
        <div class="footer-container">
            <div class="about_page">
                <h2>about us</h2>
                <p>Welcome to Room Finder, your number one source for finding the perfect room. We're dedicated to
                    giving you the very best of room rental options, with a focus on reliability, customer service, and
                    uniqueness.</p>
            </div>
            <div class="contact">
                <h3>contact-information</h3>
                <div class="infobox">
                    <div>
                        <span> <ion-icon name="location-outline"></ion-icon> </span>


                        <p>sindhupalchok,chautara-5 <br>nepal</p>


                    </div>
                    <div>
                        <span><ion-icon name="mail-open-outline"></ion-icon></span>
                        <a href="">roomfinder174@gmail.com</a>
                    </div>
                    <div>
                        <span><ion-icon name="call-outline"></ion-icon></span>
                        <a href="tel:+977">9810308778</a>
                    </div>
                </div>
            </div>
            <div class="quick_link">
                <h2>Quick links</h2>
                <ul>
                    <li><a href=""> home</a></li>
                    <li><a href="">about</a></li>
                    <li><a href="">help</a></li>
                    <li><a href="">contact</a></li>
                    <li><a href=""> services</a></li>
                    <li><a href=""> FAQ</a></li>
                </ul>
            </div>
            <div class="follow_us">
                <h2>Follow Us</h2>
                <div class="row">
                    <div>
                        <a href="https://www.facebook.com/"><ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </div>
                    <div>
                        <a href=""><ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </div>
                    <div>
                        <a href=""><ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </div>
                    <div>
                        <a href=""><ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    </footer>

</body>

</html>