<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About HWIC </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css">    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
</head>
<body>
<section class="header-abtus">
        <nav>
            <a href="#"><img src="hwic.png" alt=""></a>
            <div class="nav-links" id="navLinks">
            <i class="fas fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="/secondmain">HOME</a></li>
                    <li><a href="/announcement">ANNOUNCEMENT</a></li>
                    <li><a href="/doctor_list">APPOINTMENT</a></li>
                    <li><a href="/prescription">PRESCRIPTION</a></li>
                    <li><a href="/abtus">ABOUT US</a></li>
                    <li><a href="/history">HISTORY</a></li>
                    <li><a href="/user/profile">PROFILE</a></li>
                    
                </ul>
            </div>
            <i class="fas fa-bars onclick="showMenu()"></i>

        </nav>

   <div class="text-box">
        <h1>About HWIC</h1>
        <p> 
        All the thing that you need to know regarding Health and Wellness Centre.
        </p>
        <a href="#" class="visit-btn">Click for more</a>
   </div> 
    
</section>
<section class="vision">
    <div class="sometext">
       <div class="vision"> <h2>Vision</h2><br>
        <h4>
    IIUM Health & Wellness Centre aims at becoming a laeding centre offering excellent quality health and dental services to its customers.
        <br>
    IIUM Health & Wellness Centre is  in support of IIUM vision of becoming a leading international centre of excellent in education.</h4>
    </div>
    <div class="mision">
        <h2>Mission</h2>
        <h4>A) To provide the best quality of medical and dental services to our client;

        B) To develop an environment which instill healthy physical and spiritual essence amongst IIUM community;
        <br>
        C) To appreciate health as a valuable asset;
        <br>
        D) To take positive actions in improving further and sustain the health status and enjoy a better quality of life.</h4>
    </div>          
</div>

</section>
<!--
@foreach($appt as $k)
<h1>{{$k->app_reason}}</h1>
@endforeach
-->
</body>
</html>