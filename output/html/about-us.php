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
    <link rel="stylesheet" href="../css/about-as.css">
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

        <div class="menu-toggle"><i class="fa-solid fa-bars "></i></div>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                const menuToggle = document.querySelector(".menu-toggle");
                const menu = document.querySelector(".navigation");
                const too = document.querySelector(".navigation a.one:hover::after");


                menuToggle.addEventListener("click", () => {
                    menu.classList.toggle("active");
                    too.style.transform = "scaleX(0)";
                });
            });

        </script>
    </header>
    <!--about us page -->
    <section class="about-page">
        <div class="about-us">
            <div class="div">
                <h2>About Us</h2>
                <p>Welcome to Room Finder! We make finding your perfect room simple and stress-free.
                    Our platform offers a wide range of listings to suit all needs, from affordable student
                    accommodations
                    to
                    conveniently located spaces for professionals.
                    Our team ensures each listing is verified for quality and reliability, so you can focus on what
                    matters
                    most—finding a place that feels like home.
                    Join us at Room Finder and let us help you discover the perfect room for your lifestyle. </p>
            </div>
        </div>

        <div class="porperties">
            <div class="heading">
                <h1>Our vision and mission</h1>
            </div>
            <div class="container-card">
                <div class="vision">
                    <div class="contain-vision">
                        <h1>Our vision</h1>
                        <p>to be the leadig platform for room seekers,
                            providing unparalleled access to diverse living spaces that cater to various lifestyles
                            and perferences.</p>
                    </div>
                </div>
                <div class="mission">
                    <div class="contain-mission">
                        <h1>Our mission</h1>
                        <p>To simplify the room-finding process by offering a user-friendly platform that connects
                            seekers with their ideal living spaces efficiently and effectively.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-team">
            <h3>Our Team</h3>
            <p>our team consists of dedicated and experienced professionals who are passionate about helping you
                perfect
                room.
            </p>

        </div>
    </section>


    <!--abour us  page in ''-->
    <section class="ourteam">
        <div class="sub-container">
            <div class="teams">
                <div class="image">
                    <img src="../image/nishan shrestha.jpg" alt="image">
                </div>
                <div class="intro-t">
                    <div class="name">
                        <p>nishan shrestha</p>
                    </div>
                    <div class="desing">
                        <p> front-end developer</p>
                    </div>
                    <div class="about">
                        <!-- <p>IT Engineer</p> -->
                    </div>
                </div>
                <div class="social-links">
                    <div>
                        <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
                    </div>
                    <div>
                        <a href=""><ion-icon name="logo-twitter"></ion-icon></a>
                    </div>
                    <div>
                        <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
                    </div>
                    <div>
                        <a href=""><ion-icon name="logo-linkedin"></ion-icon></a>
                    </div>

                </div>
            </div>
            <div class="teams">
                <div class="image">
                    <img src="../image/ritesh shrestha.jpg" alt="image">
                </div>
                <div class="intro-t">
                    <div class="name">
                        <p>Ritesh shrestha</p>
                    </div>
                    <div class="desing">
                        <p>backend developer</p>

                    </div>
                    <div class="about">
                        <!-- <p>IT Engineer</p> -->
                    </div>
                </div>
                <div class="social-links">
                    <div>
                        <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
                    </div>
                    <div>
                        <a href=""><ion-icon name="logo-twitter"></ion-icon></a>
                    </div>
                    <div>
                        <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
                    </div>
                    <div>
                        <a href=""><ion-icon name="logo-linkedin"></ion-icon></a>
                    </div>
                </div>
            </div>
            <div class="teams">
                <div class="image">
                    <img src="../image/rachana acharya.jpg">
                </div>
                <div class="intro-t">
                    <div class="name">
                        <p>Rachana </p>
                    </div>
                    <div class="desing">
                        <p>helper </p>
                    </div>
                    <div class="about">
                        <!-- <p>IT Engineer</p> -->
                    </div>
                </div>
                <div class="social-links">
                    <div>
                        <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
                    </div>
                    <div>
                        <a href=""><ion-icon name="logo-twitter"></ion-icon></a>
                    </div>
                    <div>
                        <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
                    </div>
                    <div>
                        <a href=""><ion-icon name="logo-linkedin"></ion-icon></a>
                    </div>
                </div>
            </div>


        </div>
    </section>



    <footer>
        <section>
            <div class="footer-container">
                <div class="about_page">
                    <h2>about us</h2>
                    <p>Welcome to Room Finder, your number one source for finding the perfect room. We're dedicated to
                        giving you the very best of room rental options, with a focus on reliability, customer service,
                        and
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