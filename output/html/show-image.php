<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show image</title>
    <link rel="stylesheet" href="/output/css/show-image.css">
</head>
<body>
    <div class="container">
        <div class="image_box">
            <img src="/output/image/nishan shrestha.jpg">
        </div>


        <div class="image_box">
            <img src="/output/image/rachana acharya.jpg">
        </div>

        <div class="image_box">
            <img src="/output/image/front.webp">
        </div>

        <div class="image_box">
            <img src="/output/image/ritesh shrestha.jpg">
        </div>

        <div class="image_box">
            <img src="/output/image/room1.jpg">
        </div>




        <div class="buttum">
            <a onclick="nexting(a1)" class="prev">&#10094</a>
            <a onclick="nexting(1)" class="next">&#10095</a>
        </div>

        <div class="dots">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
          <span class="dot" onclick="currentSlide(5)"></span>
            <!--   <span class="dot" onclick="currentSlide(6)"></span>
            <span class="dot" onclick="currentSlide(7)"></span>
            <span class="dot" onclick="currentSlide(8)"></span>
            <span class="dot" onclick="currentSlide(9)"></span> -->

        </div>
    </div>
<script>
var imageno +1;
displaying(imageno);

function  nexting(n){

    displaying(imageno n); 


}




</script>


</body>
</html>