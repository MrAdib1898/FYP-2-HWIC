<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HWIC-Healthness Centre</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>
<body>
<section class="header-med">
        <nav>
            <a href="#"><img src="hwic.png" alt=""></a>
            <div class="nav-links" id="navLinks">
            <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="/secondmain">HOME</a></li>
                    <li><a href="/announcement">ANNOUNCEMENT</a></li>
                    <li><a href="/doctor_list">APPOINTMENT</a></li>
                    <li><a href="/prescription">PRESCRIPTION</a></li>
                    <li><a href="/history">HISTORY</a></li>
                    <li><a href="/abtus">ABOUT US</a></li>
					<li><a href="/user/profile">PROFILE</a></li>
                    
                </ul>
            </div>
            <i class="fas fa-bars onclick="showMenu()"></i>
        </nav>

   <div class="text-box">
        <h1>HISTORY</h1>
        <p> 
        Medical History regarding your visit towards our clinic. 
        </p>
        <a href="#" class="visit-btn">Click for more</a>
   </div> 
    
</section>


<section>
    <div class="sometext">
        <h2>Your Latest Visit</h2>
    </div>

</section>

<section><!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 3</div>
    <img src="therapy.jpg" style="width:100%" onclick="addChild()">
    <div class="text"><span><h3>Dental</h3></span>20/05/2021</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 3</div>
    <img src="mosque.jpg" style="width:100%">
    <div class="text"><span><h3>Medical Checkup</h3></span>09/03/2021</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 3</div>
    <img src="bdonate.jpg" style="width:100%">
    <div class="text"><span><h3>Medical Checkup</h3></span>01/02/2021</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</section>

<section>
    
<table id="customers">
  <tr>
    <th>Appointment</th>
    <th>Details</th>
    
  </tr>
  <tr>
    <td>Date</td>
    <td>20-05-2021</td>
  
  </tr>
  <tr>
    <td>Appointment's Purpose</td>
    <td>Dental</td>
  
  </tr>
  <tr>
    <td>Start Time</td>
    <td>14:31</td>
  
  </tr>
  <tr>
    <td>End Time</td>
    <td>15:31</td>
    
  </tr>
  <tr>
    <td>Doctors</td>
    <td>Dr Risyda Laredabona</td>
  
  </tr>
  <tr>
    <td>Doctor's Note</td>
    <td>Scaling and temporary filling. 
    </td>
 
  </tr>
  <tr>
    <td> <a href="/prescription">Medical Prescription</a> </td>
    <td>Pain Killer <br> -</td>
   
  </tr>
  <tr>
    <td>Dosage</td>
    <td>Use only if feel pain. <br>As a precaution if patients feel pain at the part of the temporary filling  <br></td>
 
  </tr>
  
</table>


</section>


<script>

var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

function addChild() {
  document.getElementById('customers').style.display = 'block';
}
</script>

</body>
</html>