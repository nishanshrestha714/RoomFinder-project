<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.0/css/all.min.css"
        integrity="sha512-9xKTRVabjVeZmc+GUW8GgSmcREDunMM+Dt/GrzchfN8tkwHizc5RP4Ok/MXFFy5rIjJjzhndFScTceq5e6GvVQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="../css/services.css">
    <link rel="stylesheet" href="../css/stylee.css">
    <link rel="stylesheet" href="../css/contact.css">
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
    <!--contact us -->
    <div class="class">
        <div class="contact-container">
            <div class="contact-contain">
                <h2>Contact Us</h2>
                <form action="contact.php" method="POST">
                    <div class="box">
                        <input type="text" id="name" name="name" placeholder="Enter your full name">
                    </div>
                    <br>
                    <div class="box">
                        <input type="email" id="email" name="email" placeholder="Enter your email address">
                    </div><br>
                    <div class="box">
                        <textarea id="message" name="message" placeholder="Your message..." rows="4"></textarea>
                    </div>
                    <div class="submit-box">
                        <button type="submit" class="submit-btn" name="submit">Send Message</button>
                    </div>

                </form>
            </div>

            <!--info box-->

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
                    <ul class="social">
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
                    </ul>
                </div>


            </div>
            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56483.212158477574!2d85.68305836411646!3d27.772787638470174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ebac2e539b8751%3A0xbfee2a4f31d3786f!2sChautara!5e0!3m2!1sen!2snp!4v1737558473976!5m2!1sen!2snp"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>


        <!--php code in database-->
        <?php
    
         $Host='localhost';
       $Username='root';
           $Password='';
           $Dbname='login';
           $conn=new mysqli($Host,$Username,$Password,$Dbname);
               if ($conn->connect_error) {
                     die("Connection failed: " . $conn->connect_error);
             }
         if(isset($_POST['submit'])){
        $Name = $_POST['name'] ?? '';
      $email = $_POST['email'] ?? '';
        $message= $_POST['message'] ?? ''; 
        $ins = "INSERT INTO contact(name, email, message) VALUES('$Name', '$email', '$message')";
        if ($conn->query($ins) === TRUE) {
        echo "";
    
       } else {
        echo "Error: " . $conn->error;
       }

      }
    
    

    
    
      ?>




        <!--footer page -->
        <footer>
            <section>
                <div class="footer-container">
                    <div class="about_page">
                        <h2>about us</h2>
                        <p>Welcome to Room Finder, your number one source for finding the perfect room. We're dedicated
                            to
                            giving you the very best of room rental options, with a focus on reliability, customer
                            service,
                            and
                            uniqueness.</p>
                    </div>
                    <div class="contacts">
                        <h3>contact-information</h3>
                        <div class="info-box">
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
    </div>
</body>

</html>