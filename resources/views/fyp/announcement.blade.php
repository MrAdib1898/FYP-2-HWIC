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
<section class="header-announce">
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
        <h1>Announcement</h1>
        <p> 
            Acquire information regarding the events conduct by HWIC in this page.
        </p>
        
   </div> 
    
</section>
<section class="sometext">
    <div class="title1">
        <h1>Latest events by HWIC</h1>
    </div>
    <div class="placement">
        
        @if(Auth::user()->user_type==2)         
        <a href="createann"><button type="submit" class="new-btn">Create New</button></a>           
@else
        
@endif
    
    
    </div>
    
</section>

<div class="cards">
    

@foreach($ann as $k)

<div class="card">
           <a href="#">
            <img src="{{$k->ann_image}}" alt="" class="card-image">
           <div class="card-content">
           </a>
           <h4>{{ucfirst($k->ann_name)}}</h4>
               <p>Date : {{$k->ann_date}}
               <br>
               Time : {{\Carbon\Carbon::createFromFormat('H:i:s',$k->ann_time)->format('h:i')}}
               <br>Details : {{$k->ann_desc}}
               <br><a href="{{$k->ann_link}}">Click for more information</a>
                </p>
           </div>
           <div class="card-info">
               <div>
                   310
               </div>
               <div>
                   <a href="https://www.iium.edu.my/events/show/iium-medical-check-up-for-ugpg-20202021" class="card-link">View Article</a>
               </div>
           </div>
       </div>

@endforeach

       
       <div class="card">
           <img src="dentist.jpg" alt="" class="card-image">
           <div class="card-content">
           <h4>Dental Checkup</h4>
               <p>Dentists and dental specialists allow us to offer a comprehensive range of quality oral health care in a single location. We’ve implemented some of the most technologically advanced methods in the world, so that our patients can experience care unlike they’ve ever seen before.</p>

               <p>Operation Hours: <br> 8.30a.m - 11.45a.m <br> 2.00p.m - 3.45p.m </p>

           </div>
           <div class="card-info">
               <div>
                   310
               </div>
               <div>
                   <a href="#" class="card-link">View Article</a>
               </div>
           </div>
       </div>       
   </div>
   
</body>

</html>