<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider details</title>
    <link rel="stylesheet" href="../css/slide.css">
</head>

<body>
    <div class="lists-image">
        <div class="heading">
            <h1> Room Details </h1>
        </div>
        <div class="container-image">
            <div class="image-slider">
                <div class="slides">
                    <img src="../image/room12.jpg" alt="Image 1" class="active">

                    <img src="../image/room13.jpg" alt="Image 2">

                    <img src="../image/room14.jpg" alt="Image 3">

                    <img src="../image/bath3.jpg" alt="Image 4">

                    <img src="../image/room15.jpg" alt="Image 5">

                    <img src="../image/kitchen24.jpg" alt="Image 6">

                    <img src="../image/homestay.jpg" alt="Image 7">

                </div>
                <button class="prev">&#10094;</button>
                <button class="next">&#10095;</button>
                <div class="dots"></div>
            </div>

            <div class="image-detail">
                <div class="heading">
                    <h1>Room details</h1>
                </div>
                <div class="contac">
                    <p> melamchi 2nd Floor</p>
                    <br>
                    <p>property Managed by:ghardheti.com</p>
                </div>
              
                <div class="owner-details">
                    <div class="head">
                        <h2>Suitable for:</h2>
                    </div>
                   
                    <div class="users">
                        <div class="users-details">
                            <p>Residence </p>
                        </div>
                      
                    </div>
                </div>
                <div class="owner-details">
                    <div class="head">
                        <h2>Preferences-For:</h2>
                    </div>

                    <div class="users">
                        <div class="users-details">
                            <p>single</p>
                        </div>
                        <div class="users-details">
                            <p>student</p>
                        </div>

                    </div>
                </div>
                <div class="owner-details">
                    <div class="head">
                        <h2>facilites:</h2>
                    </div>

                    <div class="users">
                        <div class="users-details">
                            <p>bike parking(2)</p>
                        </div>
                        <div class="users-details">
                            <p>car parking(0)</p>
                        </div>
                        <div class="users-details">
                            <p>boring watter(yes)</p>
                        </div>
                        <div class="users-details">
                            <p>drinking watter(yes)</p>
                        </div>

                    </div>
                </div>
                <div class="submit-box">
                    <div class="heading">
                        <h1>PER MONTH</h1>
                        <div class="price">
                            <p> NPR Rs:10,000/-</p>
                        </div>
                        <div class="buttom">
                            <a href="">book now</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="all-sections">
            <div class="over">
                <div class="heading">
                    <h1> Room overview</h1>
                    <div class="contain">
                        <p>a 2 rooms for at melamchi,sindhupalchok with the facilites of 2 bike parking and 24hrs water.
                            it is suitable for student or single person. price is fixed. it is in 2nd floor. it offers 2
                            rooms, 1 common bathroom .
                            price of include internet & electricity cost.
                        </p>
                    </div>
                </div>
                <div class="container-details">
                    <div class="head">
                        <h2>Room details</h2>
                    </div>
                    <div class="contains">
                        <div class="detail">
                            <p>total bed room :2</p>
                        </div>
                        <div class="detail">
                            <p>total living room :0</p>
                        </div>
                        <div class="detail">
                            <p>people :2</p>
                        </div>
                        <div class="detail">
                            <p>smoking :not allowed</p>
                        </div>
                        <div class="detail">
                            <p>drinking :not allowed</p>
                        </div>

                        <div class="detail">
                            <p>total kitchen room :1</p>

                        </div>
                        <div class="detail">
                            <p>total toilet/bathroom :1</p>
                        </div>
                    </div>
                </div>


                <div class="container-details">
                    <div class="head">
                        <h2>other facilities</h2>
                    </div>
                    <div class="contains">
                        <div class="detail">
                            <p>parking bike</p>
                        </div>
                        <div class="detail">
                            <p>watar boring</p>
                        </div>
                        <div class="detail">
                            <p> watar drinking</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contact-information">
                <div class="owners">
                    <div class="heading">
                        <h1>Agent/owener nformation</h1>
                    </div>
                    <div class="contain-information">
                        <p>Name:Resham shreatha</p>
                        <p>email:reshamshrestha123@gmail.com</p>
                        <p>phone:9856544342</p>
                    </div>
                    <div class="owners">
                        <div class="heading">
                            <h1>Need help? Enquire   now.</h1>
                        </div>

                        <div class="contact-container">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="name">Name:</label>
                                    <input type="text" id="name" name="name" placeholder="Enter your name" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email" placeholder="Enter your email" required>
                                </div>
                                <div class="form-group">
                                    <label for="message">Message:</label>
                                    <textarea id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>
                                </div>
                                <div class="form-group">
                                  
                                  <button type="submit"  name="submit">Submit</button> 
                                </div>
                            </form>
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

                        </div>

                    </div>
                </div>
            
            </div>
        </div>

       
    </div>
    <script src="../js/slide.js"></script>
</body>

</html>